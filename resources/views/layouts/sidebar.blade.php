<!-- resources/views/layouts/sidebar.blade.php -->
<div class="bg-light border-right position-fixed" id="sidebar-wrapper">
    <div class="sidebar-heading">YourApp</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action bg-light">Users</a>
        <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action bg-light">Categories</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Expenses</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Income</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Budget</a>
    </div>
</div>
