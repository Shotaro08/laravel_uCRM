<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div>
        <p>inertia-testです</p>
        <a href="/">aタグ経由</a>
        <Link href="/">Link経由です</Link>
        <Link :href="route('inertia.index')">名前付きルートの確認です</Link>
    </div>
</template>