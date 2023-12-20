<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('از ثبت‌نام شما متشکریم! قبل از شروع، آیا می‌توانید آدرس ایمیل خود را تأیید کنید؟ برای این کار، لطفاً بر روی لینکی که به شما ارسال شده است، کلیک کنید. اگر ایمیل را دریافت نکردید، با کمال میل به شما ارسال می‌شود.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('یک لینک تأیید جدید به آدرس ایمیلی که در زمان ثبت‌نام وارد کرده‌اید، ارسال شده است.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('ارسال مجدد ایمیل تأیید') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('خروج') }}
            </button>
        </form>
    </div>
</x-guest-layout>
