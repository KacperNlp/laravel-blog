<template>
    <app-header />
    <main><slot></slot></main>
    <app-footer />
</template>

<script setup>
import AppHeader from "../Components/AppHeader.vue";
import AppFooter from "../Components/AppFooter.vue";
</script>
