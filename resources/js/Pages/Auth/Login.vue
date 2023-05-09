<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Config, Connect, ConnectEvents } from '@vkontakte/superappkit';

const appID = 51613606;

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

Config.init({
  appId: appID, // Тут нужно подставить ID своего приложения.

  appSettings: {
    agreements: '',
    promo: '',
    vkc_behavior: '',
    vkc_auth_action: '',
    vkc_brand: '',
    vkc_display_mode: '',
  },
});

const oneTapButton = Connect.floatingOneTapAuth({
  callback: (VKAuthButtonCallbackResult) => {
    const { type } = event;

    if (!type) {
      return;
    }

    switch (type) {
      case ConnectEvents.OneTapAuthEventsSDK.LOGIN_SUCCESS:
        return console.info(event);
      default:
          console.log(event);
    }

    return;
  },
  options: {
    styles: {
      zIndex: 999,
    },
    skipSuccess: true,
  },
});

if (oneTapButton) {
  document.body.appendChild(oneTapButton.getFrame());
}


</script>

<template>
    <GuestLayout>
        <Head title="Вход" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Пароль" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Запомнить меня</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >
                    Забыли пароль?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Войти
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
