<script setup>
import { route } from '../../../vendor/tightenco/ziggy/src/js';

// import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header>
            <nav>
                <h1>{{ $page.props.auth.user }}</h1>
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>
                <div class="space-x-6">
                    <Link :href="route('register')" class="nav-link">Register</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>