<script setup>
// import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4">
                <div class="space-x-6">
                    <Link  href="/">Home</Link>
                    <Link  href="/about">About</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>