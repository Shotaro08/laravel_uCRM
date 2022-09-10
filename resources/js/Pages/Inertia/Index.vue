<script setup>

</script>
<template>
    <div>
        <p>aaaa</p>
    </div>
    <div v-if="$page.props.flash.message" class="bg-blue-300">{{ $page.props.flash.message }}</div>
</template>
