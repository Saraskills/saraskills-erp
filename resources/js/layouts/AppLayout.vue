<template>
    <div style="display: flex; height: 100vh">
        <div
            style="
                width: 250px;
                background: #1f2937;
                color: white;
                padding: 20px;
            "
        >
            <h2>SaraSkills ERP</h2>

            <hr />

            <p>Dashboard</p>
            <router-link to="/app/categories" style="color: white">
                Categories
            </router-link>
            <p>Products</p>
            <p>Brands</p>
            <p>Units</p>
        </div>

        <div style="flex: 1; padding: 20px">
            <router-view />
        </div>
    </div>
</template>
