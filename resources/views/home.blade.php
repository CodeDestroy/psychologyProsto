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
  
  
  
<div class="container bg-white py-24 sm:py-32" {{-- style="height: 100vh;" --}} style="display: block; margin-right: auto; margin-left: auto">
    <h2 class="text-base font-semibold leading-6 text-gray-900">Предстоящие встречи</h2>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-16">
      <div class="mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9">
        <div class="flex items-center text-gray-900">
          <button type="button" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
            <span class="sr-only">Предыдущий месяц</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
          </button>
          <div class="flex-auto text-sm font-semibold">Январь</div>
          <button type="button" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
            <span class="sr-only">Слудующий месяц</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
          <div>Пн</div>
          <div>Вт</div>
          <div>Ср</div>
          <div>Чт</div>
          <div>Пт</div>
          <div>Сб</div>
          <div>Вс</div>
        </div>
        <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
          <!--
            Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
            Is current month, include: "bg-white"
            Is not current month, include: "bg-gray-50"
            Is selected or is today, include: "font-semibold"
            Is selected, include: "text-white"
            Is not selected, is not today, and is current month, include: "text-gray-900"
            Is not selected, is not today, and is not current month, include: "text-gray-400"
            Is today and is not selected, include: "text-indigo-600"
  
            Top left day, include: "rounded-tl-lg"
            Top right day, include: "rounded-tr-lg"
            Bottom left day, include: "rounded-bl-lg"
            Bottom right day, include: "rounded-br-lg"
          -->
          <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <!--
              Always include: "mx-auto flex h-7 w-7 items-center justify-center rounded-full"
              Is selected and is today, include: "bg-indigo-600"
              Is selected and is not today, include: "bg-gray-900"
            -->
            <time datetime="2021-12-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
          </button>
          <button type="button" class="rounded-tr-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
          </button>
          <button type="button" class="bg-white py-1.5 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 font-semibold text-white">22</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
          </button>
          <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
          </button>
          <button type="button" class="rounded-bl-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
          </button>
          <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
          </button>
          <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
          </button>
        </div>
        <button type="button" class="mt-8 w-full rounded-md bg-violet-600 px-3 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add event</button>
      </div>
      <ol class="mt-4 divide-y divide-gray-100 text-sm leading-6 lg:col-span-7 xl:col-span-8">
        <li class="relative flex space-x-6 py-6 xl:static">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-14 w-14 flex-none rounded-full">
          <div class="flex-auto">
            <h3 class="pr-10 font-semibold text-gray-900 xl:pr-0">Leslie Alexander</h3>
            <dl class="mt-2 flex flex-col text-gray-500 xl:flex-row">
              <div class="flex items-start space-x-3">
                <dt class="mt-0.5">
                  <span class="sr-only">Date</span>
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                  </svg>
                </dt>
                <dd><time datetime="2022-01-10T17:00">January 10th, 2022 at 5:00 PM</time></dd>
              </div>
              <div class="mt-2 flex items-start space-x-3 xl:ml-3.5 xl:mt-0 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">
                <dt class="mt-0.5">
                  <span class="sr-only">Location</span>
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                  </svg>
                </dt>
                <dd>Starbucks</dd>
              </div>
            </dl>
          </div>
          <div class="absolute right-0 top-6 xl:relative xl:right-auto xl:top-auto xl:self-center">
            <div>
              <button type="button" class="-m-2 flex items-center rounded-full p-2 text-gray-500 hover:text-gray-600" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open options</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                </svg>
              </button>
            </div>
  
            <!--
              Dropdown menu, show/hide based on menu state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
              <div class="py-1" role="none">
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-0-item-0">Edit</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-0-item-1">Cancel</a>
              </div>
            </div>
          </div>
        </li>
  
        <!-- More meetings... -->
      </ol>
    </div>
</div>
@endsection
