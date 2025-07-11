<script setup>
// here we can override the layout
// import Layout from '../Layouts/demo.vue';

// defineOptions({
//     layout: Layout
// })

// these could be imported as a global component
// import { Head } from '@inertiajs/vue3';
</script>

<template>
    <!-- <Head>
        <title>Home </title>
        <meta type="description" content="My home description" head-key="description">
    </Head> -->

    <Head :title="` | ${$page.component}`" />
        
    
    <h1 class="text-3xl font-bold ">{{$page.props.user}}</h1>
</template>