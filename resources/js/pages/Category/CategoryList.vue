<template>
    <div>
        <h2>Categories</h2>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.code }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const categories = ref([]);

onMounted(async () => {
    const token = localStorage.getItem("token");

    const response = await axios.get("/api/categories", {
        headers: {
            Authorization: `Bearer ${token}`,
        },
    });

    categories.value = response.data.data;
});
</script>
