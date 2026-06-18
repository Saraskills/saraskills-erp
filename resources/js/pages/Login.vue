<template>
    <div>
        <h1>SaraSkills ERP Login</h1>

        <input v-model="email" placeholder="Email" />

        <br /><br />

        <input v-model="password" type="password" placeholder="Password" />

        <br /><br />

        <button @click="login">Login</button>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const router = useRouter();

const email = ref("admin@saraskills.com");
const password = ref("password123");

const login = async () => {
    try {
        const response = await axios.post("/api/login", {
            email: email.value,
            password: password.value,
        });

        localStorage.setItem("token", response.data.token);

        router.push("/app/dashboard");
    } catch (error) {
        console.log(error);

        alert("Login Failed");
    }
};
</script>
