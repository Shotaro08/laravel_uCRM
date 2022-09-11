<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Label from '@/Components/InputLabel.vue';
import Input from '@/Components/TextInput.vue';
import Checkbox from '@/Components/Checkbox.vue'

const emitTest = e => console.log(e);

</script>

<template>
    <div>
        <GuestLayout>
            <Label value="件名">
                <p>lavel-component</p>
            </Label>
            <Input @update:modelValue="emitTest" modelValue="初期値が入ります"></Input>
            <Checkbox></Checkbox>
        </GuestLayout>
    </div>
</template>