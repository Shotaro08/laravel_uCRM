<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div>
        <p>inertia-testです</p><br>
        <a href="/">aタグ経由</a><br>
        <Link href="/">Link経由です</Link><br>
        <Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
        <Link :href="route('inertia.show', { id: 50 })">ルートパラメータのテスト</Link><br>
    </div>
</template>