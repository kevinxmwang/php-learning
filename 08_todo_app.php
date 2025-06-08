<?php
session_start();

// Initialize todos array if not exists
if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

// Handle form submission
if ($_POST) {
    if (isset($_POST['add_todo']) && !empty($_POST['todo_text'])) {
        $newTodo = [
            'id' => time(),
            'text' => htmlspecialchars($_POST['todo_text']),
            'completed' => false
        ];
        $_SESSION['todos'][] = $newTodo;
    }
    
    if (isset($_POST['delete_todo'])) {
        $todoId = $_POST['todo_id'];
        $_SESSION['todos'] = array_filter($_SESSION['todos'], function($todo) use ($todoId) {
            return $todo['id'] != $todoId;
        });
    }
    
    if (isset($_POST['toggle_todo'])) {
        $todoId = $_POST['todo_id'];
        foreach ($_SESSION['todos'] as &$todo) {
            if ($todo['id'] == $todoId) {
                $todo['completed'] = !$todo['completed'];
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Todo App</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        .todo-item { padding: 10px; border: 1px solid #ddd; margin: 5px 0; display: flex; justify-content: space-between; align-items: center; }
        .completed { text-decoration: line-through; opacity: 0.6; }
        input[type="text"] { padding: 8px; width: 300px; }
        button { padding: 8px 15px; margin: 2px; }
        .delete-btn { background-color: #ff4444; color: white; border: none; }
        .toggle-btn { background-color: #44aa44; color: white; border: none; }
        .add-btn { background-color: #4444ff; color: white; border: none; }
    </style>
</head>
<body>
    <h1>Simple Todo App</h1>
    
    <!-- Add Todo Form -->
    <form method="POST">
        <input type="text" name="todo_text" placeholder="Enter a new todo..." required>
        <button type="submit" name="add_todo" class="add-btn">Add Todo</button>
    </form>
    
    <hr>
    
    <!-- Display Todos -->
    <h2>Your Todos (<?php echo count($_SESSION['todos']); ?> items)</h2>
    
    <?php if (empty($_SESSION['todos'])): ?>
        <p>No todos yet. Add one above!</p>
    <?php else: ?>
        <?php foreach ($_SESSION['todos'] as $todo): ?>
            <div class="todo-item">
                <span class="<?php echo $todo['completed'] ? 'completed' : ''; ?>">
                    <?php echo $todo['text']; ?>
                </span>
                <div>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                        <button type="submit" name="toggle_todo" class="toggle-btn">
                            <?php echo $todo['completed'] ? 'Undo' : 'Complete'; ?>
                        </button>
                    </form>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                        <button type="submit" name="delete_todo" class="delete-btn" onclick="return confirm('Delete this todo?')">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <hr>
    <p><em>This todo app uses PHP sessions to store data temporarily. Data will be lost when you close your browser.</em></p>
</body>
</html>