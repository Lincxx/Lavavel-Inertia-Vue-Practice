<script setup>
import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3'
import TextInput from '../Components/TextInput.vue';

const form = useForm({
    email: null,  
    password: null,
    remember: null
})

const submit = () => {
    form.post(route('login'), {
        onError: () => form.reset('password', 'password_confirmation')
    })
}
</script>

<template>
    <Head tile="Login"/>
    <h1 class="title">Login to your account</h1>

    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
           
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            
            <TextInput name="password" type="password" v-model="form.password" :message="form.errors.password" />
        

            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-2" >
                    <label for="">Remember me</label>
                <input type="checkbox" v-model="form.remember">
                </div>
                
                <p class="text-slate-600">Need an account? <a href="/register" class="text-link">Register</a>
                </p>
            </div>
            <div>
              
                <button class="primary-btn" :disabled="form.processing">Login</button>
            </div>
        </form>
    </div>
</template>