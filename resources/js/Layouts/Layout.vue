<script setup>
import { route } from '../../../vendor/tightenco/ziggy/src/js';

// import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4">
                <h1>{{ $page.props.auth.user }}</h1>
                <div class="space-x-6">
                    <Link  :href="route('home')">Home</Link>
                    <Link  :href="route('about')">About</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>