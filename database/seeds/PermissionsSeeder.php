<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permisos
        $viewUsers = Permission::create(['name' => 'view_users']);
        $createUsers = Permission::create(['name' => 'create_users']);
        $editUsers = Permission::create(['name' => 'edit_users']);
        $deleteUsers = Permission::create(['name' => 'delete_users']);

        $viewRoles = Permission::create(['name' => 'view_roles']);
        $createRoles = Permission::create(['name' => 'create_roles']);
        $editRoles = Permission::create(['name' => 'edit_roles']);
        $deleteRoles = Permission::create(['name' => 'delete_roles']);

        $viewSales = Permission::create(['name' => 'view_sales']);
        $createSales = Permission::create(['name' => 'create_sales']);
        $editSales = Permission::create(['name' => 'edit_sales']);
        $deleteSales = Permission::create(['name' => 'delete_sales']);

        $viewInventory = Permission::create(['name' => 'view_inventory']);
        $createInventory = Permission::create(['name' => 'create_inventory']);
        $editInventory = Permission::create(['name' => 'edit_inventory']);
        $deleteInventory = Permission::create(['name' => 'delete_inventory']);

        $viewStock = Permission::create(['name' => 'view_stock']);
        $createStock = Permission::create(['name' => 'create_stock']);
        $editStock = Permission::create(['name' => 'edit_stock']);
        $deleteStock = Permission::create(['name' => 'delete_stock']);

        $viewProduct = Permission::create(['name' => 'view_product']);
        $createProduct = Permission::create(['name' => 'create_product']);
        $editProduct = Permission::create(['name' => 'edit_product']);
        $deleteProduct = Permission::create(['name' => 'delete_product']);

        $viewCostumers = Permission::create(['name' => 'view_costumers']);
        $createCostumers = Permission::create(['name' => 'create_costumers']);
        $editCostumers = Permission::create(['name' => 'edit_costumers']);
        $deleteCostumers = Permission::create(['name' => 'delete_costumers']);

        $viewProviders = Permission::create(['name' => 'view_providers']);
        $createProviders = Permission::create(['name' => 'create_providers']);
        $editProviders = Permission::create(['name' => 'edit_providers']);
        $deleteProviders = Permission::create(['name' => 'delete_providers']);

        $viewServices = Permission::create(['name' => 'view_services']);
        $createServices = Permission::create(['name' => 'create_services']);
        $editServices = Permission::create(['name' => 'edit_services']);
        $deleteServices = Permission::create(['name' => 'delete_services']);

        $viewFinances = Permission::create(['name' => 'view_finances']);
        $createFinances = Permission::create(['name' => 'create_finances']);
        $editFinances = Permission::create(['name' => 'edit_finances']);
        $deleteFinances = Permission::create(['name' => 'delete_finances']);

        $viewPurchase = Permission::create(['name' => 'view_purchase']);
        $createPurchase = Permission::create(['name' => 'create_purchase']);
        $editPurchase = Permission::create(['name' => 'edit_purchase']);
        $deletePurchase = Permission::create(['name' => 'delete_purchase']);

        $viewExpense = Permission::create(['name' => 'view_expense']);
        $createExpense = Permission::create(['name' => 'create_expense']);
        $editExpense = Permission::create(['name' => 'edit_expense']);
        $deleteExpense = Permission::create(['name' => 'delete_expense']);

        $viewEmploy = Permission::create(['name' => 'view_employ']);
        $createEmploy = Permission::create(['name' => 'create_employ']);
        $editEmploy = Permission::create(['name' => 'edit_employ']);
        $deleteEmploy = Permission::create(['name' => 'delete_employ']);

        $viewPayroll = Permission::create(['name' => 'view_payroll']);
        $createPayroll = Permission::create(['name' => 'create_payroll']);
        $editPayroll = Permission::create(['name' => 'edit_payroll']);
        $deletePayroll = Permission::create(['name' => 'delete_payroll']);

        $viewKnowledge = Permission::create(['name' => 'view_knowledge']);
        $createKnowledge = Permission::create(['name' => 'create_knowledge']);
        $editKnowledge = Permission::create(['name' => 'edit_knowledge']);
        $deleteKnowledge = Permission::create(['name' => 'delete_knowledge']);

        $viewSettings = Permission::create(['name' => 'view_settings']);
        $createSettings = Permission::create(['name' => 'create_settings']);
        $editSettings = Permission::create(['name' => 'edit_settings']);
        $deleteSettings = Permission::create(['name' => 'delete_settings']);

        // Manager
        $permissions_manager = [];

        array_push($permissions_manager, $viewUsers);
        array_push($permissions_manager, $createUsers);
        array_push($permissions_manager, $editUsers);
        array_push($permissions_manager, $deleteUsers);

        array_push($permissions_manager, $viewRoles);
        array_push($permissions_manager, $createRoles);
        array_push($permissions_manager, $editRoles);
        array_push($permissions_manager, $deleteRoles);

        array_push($permissions_manager, $viewSales);
        array_push($permissions_manager, $createSales);
        array_push($permissions_manager, $editSales);
        array_push($permissions_manager, $deleteSales);

        array_push($permissions_manager, $viewInventory);
        array_push($permissions_manager, $createInventory);
        array_push($permissions_manager, $editInventory);
        array_push($permissions_manager, $deleteInventory);

        array_push($permissions_manager, $viewStock);
        array_push($permissions_manager, $createStock);
        array_push($permissions_manager, $editStock);
        array_push($permissions_manager, $deleteStock);

        array_push($permissions_manager, $viewProduct);
        array_push($permissions_manager, $createProduct);
        array_push($permissions_manager, $editProduct);
        array_push($permissions_manager, $deleteProduct);

        array_push($permissions_manager, $viewCostumers);
        array_push($permissions_manager, $createCostumers);
        array_push($permissions_manager, $editCostumers);
        array_push($permissions_manager, $deleteCostumers);

        array_push($permissions_manager, $viewProviders);
        array_push($permissions_manager, $createProviders);
        array_push($permissions_manager, $editProviders);
        array_push($permissions_manager, $deleteProviders);

        array_push($permissions_manager, $viewServices);
        array_push($permissions_manager, $createServices);
        array_push($permissions_manager, $editServices);
        array_push($permissions_manager, $deleteServices);

        array_push($permissions_manager, $viewFinances);
        array_push($permissions_manager, $createFinances);
        array_push($permissions_manager, $editFinances);
        array_push($permissions_manager, $deleteFinances);

        array_push($permissions_manager, $viewPurchase);
        array_push($permissions_manager, $createPurchase);
        array_push($permissions_manager, $editPurchase);
        array_push($permissions_manager, $deletePurchase);

        array_push($permissions_manager, $viewEmploy);
        array_push($permissions_manager, $createEmploy);
        array_push($permissions_manager, $editEmploy);
        array_push($permissions_manager, $deleteEmploy);

        array_push($permissions_manager, $viewPayroll);
        array_push($permissions_manager, $createPayroll);
        array_push($permissions_manager, $editPayroll);
        array_push($permissions_manager, $deletePayroll);

        array_push($permissions_manager, $viewExpense);
        array_push($permissions_manager, $createExpense);
        array_push($permissions_manager, $editExpense);
        array_push($permissions_manager, $deleteExpense);

        array_push($permissions_manager, $viewKnowledge);
        array_push($permissions_manager, $createKnowledge);
        array_push($permissions_manager, $editKnowledge);
        array_push($permissions_manager, $deleteKnowledge);

        array_push($permissions_manager, $viewSettings);
        array_push($permissions_manager, $createSettings);
        array_push($permissions_manager, $editSettings);
        array_push($permissions_manager, $deleteSettings);

        $managerRole = Role::create(['name' => 'manager']);
        $managerRole->syncPermissions($permissions_manager);

        $userManager = User::create([
            'name' => "Manager",
            'email' => "manager@rivas.com",
            'password' => Hash::make("manager"),
        ]);
        $userManager->assignRole($managerRole);
    }
}
