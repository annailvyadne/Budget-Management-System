<!-- resources/views/layouts/sidebar.blade.php -->
<div class="bg-light border-right position-fixed" id="sidebar-wrapper">
    <div class="sidebar-heading">Budget Management System</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action bg-light">Categories</a>
        <a href="{{ route('expenses.index') }}" class="list-group-item list-group-item-action bg-light">Expenses</a>
        <a href="{{ route('incomes.index') }}" class="list-group-item list-group-item-action bg-light">Income</a>
        <a href="{{ route('budgets.index') }}" class="list-group-item list-group-item-action bg-light">Budget</a>   
        <a href="{{ route('savings.index') }}" class="list-group-item list-group-item-action bg-light">Savings</a>  
        <a href="{{ route('funds.index') }}" class="list-group-item list-group-item-action bg-light">Sinking Funds</a>
        <a href="{{ route('debts.index') }}" class="list-group-item list-group-item-action bg-light">Debts</a>
    </div>
</div>
