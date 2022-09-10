<script setup>
    import { reactive } from 'vue';
    // 0910 下がちゃんとインポートできてなかったからエラーになっていた
    import { Inertia } from '@inertiajs/inertia';

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
            <input type="text" name="content" v-model="form.content"><br>

            <!-- これはイベント発生させるためのスイッチ -->
            <button>送信</button>
        </form>
    </div>
</template>