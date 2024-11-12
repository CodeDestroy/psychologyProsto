@extends('layouts.app')

@section('content')
<div class="relative bg-white" {{-- style="height: 100vh;" --}} >
    <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
        <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
          <div class="mx-auto max-w-2xl lg:mx-0">
              <img class="h-11" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
              <div class="hidden sm:mt-32 sm:flex lg:mt-16">
                  <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                      Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#" class="whitespace-nowrap font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                  </div>
              </div>
              <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">Data to enrich your online business</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
              <div class="mt-10 flex items-center gap-x-6">
                  <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
              </div>
          </div>
        </div>
        <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
            <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full" src="https://images.unsplash.com/photo-1498758536662-35b82cd15e29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2102&q=80" alt="">
        </div>
    </div>
</div>
  
  
<div class="bg-white py-24 sm:py-32" {{-- style="height: 100vh;" --}}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Stay on top of customer support</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                            </svg>
                        </div>
                        Unlimited inboxes
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Non quo aperiam repellendus quas est est. Eos aut dolore aut ut sit nesciunt. Ex tempora quia. Sit nobis consequatur dolores incidunt.</p>
                        <p class="mt-6">
                            <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
                        </p>
                    </dd>
                </div>
                <div class="flex flex-col">
                  <dt class="text-base font-semibold leading-7 text-gray-900">
                      <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                          </svg>
                      </div>
                      Manage team members
                  </dt>
                  <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                      <p class="flex-auto">Vero eum voluptatem aliquid nostrum voluptatem. Vitae esse natus. Earum nihil deserunt eos quasi cupiditate. A inventore et molestiae natus.</p>
                      <p class="mt-6">
                          <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
                      </p>
                  </dd>
                </div>
                <div class="flex flex-col">
                  <dt class="text-base font-semibold leading-7 text-gray-900">
                      <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                          <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                      </div>
                      Spam report
                  </dt>
                  <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                      <p class="flex-auto">Et quod quaerat dolorem quaerat architecto aliquam accusantium. Ex adipisci et doloremque autem quia quam. Quis eos molestiae at iure impedit.</p>
                      <p class="mt-6">
                          <a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
                      </p>
                  </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
  
  
  
<div class="bg-white py-24 sm:py-32" {{-- style="height: 100vh;" --}}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Pricing</h2>
            <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Pricing plans for teams of all sizes</p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.</p>
        <div class="mt-16 flex justify-center">
            <fieldset aria-label="Payment frequency">
                <div class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200">
                <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
                    <label class="cursor-pointer rounded-full px-2.5 py-1">
                        <input type="radio" name="frequency" value="monthly" class="sr-only">
                        <span>Monthly</span>
                    </label>
                    <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
                    <label class="cursor-pointer rounded-full px-2.5 py-1">
                        <input type="radio" name="frequency" value="annually" class="sr-only">
                        <span>Annually</span>
                    </label>
                </div>
            </fieldset>
        </div>
        <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="rounded-3xl p-8 ring-1 ring-gray-200 xl:p-10">
                <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">Freelancer</h3>
                <p class="mt-4 text-sm leading-6 text-gray-600">The essentials to provide your best work for clients.</p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <!-- Price, update based on frequency toggle state -->
                    <span class="text-4xl font-bold tracking-tight text-gray-900">$15</span>
                    <!-- Payment frequency, update based on frequency toggle state -->
                    <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                </p>
                <a href="#" aria-describedby="tier-freelancer" class="mt-6 block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</a>
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        5 products
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Up to 1,000 subscribers
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Basic analytics
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        48-hour support response time
                    </li>
                </ul>
            </div>
            <div class="rounded-3xl p-8 ring-1 ring-gray-200 xl:p-10">
                <h3 id="tier-startup" class="text-lg font-semibold leading-8 text-gray-900">Startup</h3>
                <p class="mt-4 text-sm leading-6 text-gray-600">A plan that scales with your rapidly growing business.</p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <!-- Price, update based on frequency toggle state -->
                    <span class="text-4xl font-bold tracking-tight text-gray-900">$30</span>
                    <!-- Payment frequency, update based on frequency toggle state -->
                    <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                </p>
                <a href="#" aria-describedby="tier-startup" class="mt-6 block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</a>
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        25 products
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Up to 10,000 subscribers
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        24-hour support response time
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Marketing automations
                    </li>
                </ul>
            </div>
            <div class="rounded-3xl bg-green-950 p-8 ring-1 ring-green-900 xl:p-10">
                <h3 id="tier-enterprise" class="text-lg font-semibold leading-8 text-white">Enterprise</h3>
                <p class="mt-4 text-sm leading-6 text-gray-300">Dedicated support and infrastructure for your company.</p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-bold tracking-tight text-white">Custom</span>
                </p>
                <a href="#" aria-describedby="tier-enterprise" class="mt-6 block rounded-md bg-white/10 px-3 py-2 text-center text-sm font-semibold leading-6 text-white hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Contact sales</a>
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 xl:mt-10">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Unlimited products
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        1-hour, dedicated support response time
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Marketing automations
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Custom reporting tools
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
  
  
  
<div x-data="calendarComponent()" class="container bg-white py-24 sm:py-32 mx-auto">
    <h2 class="text-base font-semibold leading-6 text-gray-900">Предстоящие встречи</h2>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-16">
        <!-- Навигация по месяцам -->
        <div class="mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9">
            <div class="flex items-center text-gray-900">
                <button @click="prevMonth" class="-m-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Предыдущий месяц</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="flex-auto text-sm font-semibold" x-text="monthNames[month] + ' ' + year"></div>
                <button @click="nextMonth" class="-m-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Следующий месяц</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            
            <!-- Заголовки дней недели -->
            <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                <template x-for="day in weekDays" :key="day">
                    <div x-text="day"></div>
                </template>
            </div>
            
            <!-- Сетка календаря -->
            <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                <template x-for="(day, index) in days" :key="index">
                    <button 
                        
                        :class="{
                            'bg-white text-gray-900': day.currentMonth && !day.isToday,
                            'bg-gray-50 text-gray-400': !day.currentMonth,
                            'bg-violet-900 text-white font-semibold hover:bg-violet-800': day.isToday,
                            'rounded-tl-lg': index === 0,
                            'rounded-tr-lg': index === 6,
                            'rounded-bl-lg': index === days.length - 7,
                            'rounded-br-lg': index === days.length - 1,
                            'bg-violet-400 hover:bg-violet-300': day.date === selectedDate && !day.isToday
                        }"
                        class="py-1.5 hover:bg-gray-100 focus:z-10"
                        @click="selectDate(day.date)"
                    >
                        <time :datetime="day.date" x-text="day.day" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full"></time>
                    </button>
                </template>
            </div>
        </div>
        
        <ol class="mt-4 divide-y divide-gray-100 text-sm leading-6 lg:col-span-7 xl:col-span-8">
            <template x-for="event in events" :key="event.id">
                <li class="relative flex space-x-6 py-6 xl:static">
                    <img :src="event.image" alt="" class="h-14 w-14 flex-none rounded-full">
                    <div class="flex-auto">
                        <h3 class="pr-10 font-semibold text-gray-900 xl:pr-0" x-text="event.name"></h3>
                        <dl class="mt-2 flex flex-col text-gray-500 xl:flex-row">
                            <div class="flex items-start space-x-3">
                                <dt class="mt-0.5">
                                    <span class="sr-only">Date</span>
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                                    </svg>
                                    </dt>
                                <dd><time x-text="formatDateTime(event.start_date, event.start_time)"></time></dd>
                            </div>
                            {{-- <div class="mt-2 flex items-start space-x-3 xl:ml-3.5 xl:mt-0 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">
                                <dt class="mt-0.5">
                                    <span class="sr-only">Location</span>
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                    </svg>
                                </dt>
                                <dd>Starbucks</dd>
                            </div> --}}
                        </dl>
                    </div>
                </li>
            </template>
            <div x-show="events.length === 0">
                <li class="relative flex space-x-6 py-6 xl:static"><h3 class="pr-10 font-semibold text-gray-900 xl:pr-0">На выбранную дату нет событий.</h3></li>
                {{-- <p>На выбранную дату нет событий.</p> --}}
            </div>
        </ol>
    </div>
</div>

<script>
    function calendarComponent() {
        return {
            month: new Date().getMonth(),
            year: new Date().getFullYear(),
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            weekDays: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
            
            days: [],
            
            init() {
                this.generateCalendar();
            },
            
            generateCalendar() {
                const firstDayOfMonth = new Date(this.year, this.month, 1);
                const lastDayOfMonth = new Date(this.year, this.month + 1, 0);
                const firstDayOfWeek = firstDayOfMonth.getDay() || 7; // Sunday as 7
                const totalDays = lastDayOfMonth.getDate();
                this.days = [];
                this.selectedDate = new Date().getDate() && this.month === new Date().getMonth() && this.year === new Date().getFullYear();
                
                // Previous month's days
                for (let i = 1; i < firstDayOfWeek; i++) {
                    this.days.push({
                        day: new Date(this.year, this.month, i - firstDayOfWeek + 1).getDate(),
                        currentMonth: false,
                        date: this.formatDate(this.year, this.month, i - firstDayOfWeek + 1),
                        isToday: false,
                    });
                }
                
                // Current month's days
                for (let day = 1; day <= totalDays; day++) {
                    const isToday = day === new Date().getDate() && this.month === new Date().getMonth() && this.year === new Date().getFullYear();
                    const date = this.formatDate(this.year, this.month, day + 1)
                    this.days.push({
                        day,
                        currentMonth: true,
                        date: date,
                        isToday
                    });
                    if (isToday) {
                        this.selectDate(date);
                    }
                    
                }
                
                // Next month's days
                const remainingDays = 42 - this.days.length;
                for (let i = 1; i <= remainingDays; i++) {
                    this.days.push({
                        day: i,
                        currentMonth: false,
                        date: this.formatDate(this.year, this.month + 1, i),
                        isToday: false
                    });
                }
                
            },
            
            prevMonth() {
                this.month--;
                if (this.month < 0) {
                    this.month = 11;
                    this.year--;
                }
                this.generateCalendar();
            },
            
            nextMonth() {
                this.month++;
                if (this.month > 11) {
                    this.month = 0;
                    this.year++;
                }
                this.generateCalendar();
            },
            
            formatDate(year, month, day) {
                return new Date(year, month, day).toISOString().split('T')[0];
            },

            async loadEvents(date) {
                this.selectedDate = date.toISOString().split('T')[0];
                try {
                    const response = await fetch(`/api/events?date=${this.selectedDate}`);
                    this.events = await response.json();
                } catch (error) {
                    console.error("Ошибка загрузки событий:", error);
                }
            },

            selectDate(date) {
                this.loadEvents(new Date(date));
            },

            formatDateTime(dateStr, timeStr) {
                const months = [
                    "Января", "Февраля", "Марта", "Апреля", "Мая", "Июня",
                    "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"
                ];

                // Преобразуем строку даты в объект Date
                const date = new Date(`${dateStr}T${timeStr}`);
                
                // Получаем день, месяц и год
                const day = date.getDate();
                const month = months[date.getMonth()];
                const year = date.getFullYear();

                // Форматируем время в формате "часы:минуты"
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');

                // Объединяем все в нужный формат
                return `${day} ${month}, ${year} в ${hours}:${minutes}`;
            }
        };
    }
</script>


{{-- <div x-data="calendarComponent()" class="container bg-white py-24 sm:py-32 mx-auto">
    <h2 class="text-base font-semibold leading-6 text-gray-900">Предстоящие встречи</h2>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-16">
        <!-- Навигация по месяцам -->
        <div class="mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9">
            <div class="flex items-center text-gray-900">
                <button @click="prevMonth" class="-m-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Предыдущий месяц</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="flex-auto text-sm font-semibold" x-text="monthNames[month] + ' ' + year"></div>
                <button @click="nextMonth" class="-m-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Следующий месяц</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            
            <!-- Заголовки дней недели -->
            <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                <template x-for="day in weekDays" :key="day">
                    <div x-text="day"></div>
                </template>
            </div>
            
            <!-- Сетка календаря -->
            <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                <template x-for="(day, index) in days" :key="index">
                    <button 
                        @click="selectDate(day.date)"
                        :class="{
                            'bg-white text-gray-900': day.currentMonth && !day.isToday,
                            'bg-gray-50 text-gray-400': !day.currentMonth,
                            'bg-indigo-600 text-white font-semibold': day.isToday,
                            'rounded-tl-lg': index === 0,
                            'rounded-tr-lg': index === 6,
                            'rounded-bl-lg': index === days.length - 7,
                            'rounded-br-lg': index === days.length - 1
                        }"
                        class="py-1.5 hover:bg-gray-100 focus:z-10"
                        x-text="day.day"
                    >
                        <time :datetime="day.date" x-text="day.day" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full"></time>
                    </button>
                </template>
            </div>
        </div>
    </div>
</div>

<script defer>
    function calendarComponent() {
        return {
            month: new Date().getMonth(),
            year: new Date().getFullYear(),
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            weekDays: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
            
            days: [],
            
            init() {
                this.generateCalendar();
            },
            
            generateCalendar() {
                const firstDayOfMonth = new Date(this.year, this.month, 1);
                const lastDayOfMonth = new Date(this.year, this.month + 1, 0);
                const firstDayOfWeek = firstDayOfMonth.getDay() || 7; // Sunday as 7
                const totalDays = lastDayOfMonth.getDate();
                
                this.days = [];
                
                // Previous month's days
                for (let i = 1; i < firstDayOfWeek; i++) {
                    this.days.push({
                        day: new Date(this.year, this.month, i - firstDayOfWeek + 1).getDate(),
                        currentMonth: false,
                        date: this.formatDate(this.year, this.month, i - firstDayOfWeek + 1),
                        isToday: false
                    });
                }
                
                // Current month's days
                for (let day = 1; day <= totalDays; day++) {
                    const isToday = day === new Date().getDate() && this.month === new Date().getMonth() && this.year === new Date().getFullYear();
                    this.days.push({
                        day,
                        currentMonth: true,
                        date: this.formatDate(this.year, this.month, day),
                        isToday
                    });
                }
                
                // Next month's days
                const remainingDays = 42 - this.days.length;
                for (let i = 1; i <= remainingDays; i++) {
                    this.days.push({
                        day: i,
                        currentMonth: false,
                        date: this.formatDate(this.year, this.month + 1, i),
                        isToday: false
                    });
                }
            },
            
            prevMonth() {
                this.month--;
                if (this.month < 0) {
                    this.month = 11;
                    this.year--;
                }
                this.generateCalendar();
            },
            
            nextMonth() {
                this.month++;
                if (this.month > 11) {
                    this.month = 0;
                    this.year++;
                }
                this.generateCalendar();
            },
            
            formatDate(year, month, day) {
                return new Date(year, month, day).toISOString().split('T')[0];
            },

            async loadEvents(date) {
                    this.selectedDate = date.toISOString().split('T')[0];
                    try {
                        const response = await fetch(`/api/events?date=${this.selectedDate}`);
                        this.events = await response.json();
                    } catch (error) {
                        console.error("Ошибка загрузки событий:", error);
                    }
            },

            selectDate(date) {
                this.loadEvents(new Date(date));
            },
        };
    }
</script> --}}
@endsection
