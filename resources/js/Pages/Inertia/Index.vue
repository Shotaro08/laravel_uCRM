<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    //Laravel側から送ったcollectionを受け取る
    defineProps({
        blogs: Array
    });
</script>

<template>
    <div v-if="$page.props.flash.message" class="bg-blue-300">{{ $page.props.flash.message }}</div>
    <div>
        <ul>
            <li v-for="blog in blogs" :key="blog.id">
                件名: <Link  class="text-blue-300" :href="route('inertia.show', { id: blog.id })">{{ blog.title }}</Link>, 
                内容: {{ blog.content }}
            </li>
            
        </ul>
    </div>
</template>

