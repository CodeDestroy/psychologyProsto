@extends('layouts.app')

@section('content')
<div class="flex justify-center">
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl sm:text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Контакты</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Свяжитесь с нами.</p>
    </div>
    <div class="mx-auto mt-10 max-w-lg space-y-16">
        <div class="flex gap-x-6">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-base font-semibold leading-7 text-gray-900">Sales support</h3>
                <p class="mt-2 leading-7 text-gray-600">Ut cursus est ut amet. Lobortis eget egestas leo vitae eget porttitor risus blandit. Nunc a in lorem vel iaculis porttitor.</p>
                <p class="mt-4">
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Contact us <span aria-hidden="true">→</span></a>
                </p>
            </div>
        </div>
        <div class="flex gap-x-6">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-base font-semibold leading-7 text-gray-900">Сообщить о найденном баге</h3>
                <p class="mt-2 leading-7 text-gray-600">Сообщите нам о найденных багах или неисправностях, мы устраним их в ближайшее время.</p>
                <p class="mt-4">
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Сообщить о баге <span aria-hidden="true">→</span></a>
                </p>
            </div>
        </div>
        <div class="flex gap-x-6">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-base font-semibold leading-7 text-gray-900">Техническая поддержка</h3>
                <p class="mt-2 leading-7 text-gray-600">Возникли проблемы или есть вопросы по работе на сайте? Свяжитесь с нами, мы постараемся помочь!</p>
                <p class="mt-4">
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Связаться <span aria-hidden="true">→</span></a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection