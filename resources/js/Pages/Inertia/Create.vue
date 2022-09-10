<script setup>
    import { reactive } from 'vue';
    // 0910 下がちゃんとインポートできてなかったからエラーになっていた
    import { Inertia } from '@inertiajs/inertia';

    //バリデーションエラーの際にここでうけとる（Object） .title .contentが使えるようになる
    defineProps({
        errors: Object
    })

    // 0910 ここで宣言することでv-modelの中で.title .contentが使える
    const form = reactive({
        title: null,
        content: null
    });

    const submitFunction = () => {
        // 0910 どこに送るか、何を（Object）送るか route()はちゃんと確認する
        Inertia.post('/inertia/store', form);
    }

</script>

<template>
    <div>
        <!-- 0910 ボタンでページ更新されてしまうので、'.prevent'でそれを止めている　
        その後、ボタン押下後の処理を入れる -->
        <form @submit.prevent="submitFunction">

            <!-- 0910 v-modelで入力された値が上で宣言した変数に自動的に入る -->
            <input type="text" name="title" v-model="form.title"><br>
            <!-- 0910 errors.titleがあれば表示 -->
            <div v-if="errors.title">{{ errors.title }}</div><br>
            <input type="text" name="content" v-model="form.content"><br>
            <!-- 0910 errors.contentがあれば表示 -->
            <div v-if="errors.content">{{ errors.content }}</div>

            <!-- 0910 これはイベント発生させるためのスイッチ -->
            <button>送信</button>
        </form>
    </div>
</template>