<section class="relative overflow-hidden bg-[#f8f7f6] py-24 sm:py-32">
    <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 left-0 right-0 hidden lg:flex">
        <div class="mx-auto flex w-full max-w-6xl justify-between px-6 lg:px-8">
            <span class="h-full w-px bg-zinc-200/60"></span>
            <span class="h-full w-px bg-zinc-200/60"></span>
        </div>
    </div>
    <div class="relative mx-auto max-w-6xl px-6 lg:px-8">
        <div class="flex flex-col items-center text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-zinc-200/80 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-wide text-zinc-600 shadow-sm">
                <x-phosphor-sparkle class="h-4 w-4 text-zinc-500" />
                For support teams
            </span>
            <h2 class="mt-6 text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl md:text-6xl">
                How Wave works for customer support teams
            </h2>
            <p class="mt-6 max-w-2xl text-base leading-7 text-zinc-500 sm:text-lg">
                Empower your support team with scheduling tools that enhance customer service, streamline issue resolution, and improve satisfaction.
            </p>
            <div class="mt-8">
                <x-button size="lg" class="px-8">
                    Get started
                </x-button>
            </div>
        </div>

        <div class="mt-20 grid items-start gap-12 lg:gap-16 lg:grid-cols-12">
            <div class="col-span-12 lg:col-span-7">
                <div class="relative isolate overflow-hidden rounded-[32px] border border-zinc-200/70 bg-white shadow-2xl shadow-zinc-900/5">
                    <div class="flex flex-col gap-4 border-b border-zinc-100 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-2">
                                @foreach ([
                                    'https://i.pravatar.cc/120?img=52',
                                    'https://i.pravatar.cc/120?img=15',
                                    'https://i.pravatar.cc/120?img=4'
                                ] as $avatar)
                                    <img src="{{ $avatar }}" alt="Team member avatar" class="size-9 rounded-full border-2 border-white object-cover">
                                @endforeach
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-zinc-900">Cal.com team huddle meeting</p>
                                <p class="mt-1 inline-flex items-center gap-2 text-xs font-medium text-emerald-600">
                                    <span class="relative flex h-1.5 w-1.5">
                                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                                        <span class="relative inline-flex h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    </span>
                                    Live · Support specialists
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 text-zinc-400">
                            <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                                <x-phosphor-bell-ringing-duotone class="h-4 w-4" />
                            </span>
                            <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                                <x-phosphor-faders-duotone class="h-4 w-4" />
                            </span>
                            <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                                <x-phosphor-dots-three-outline class="h-4 w-4" />
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-8 px-6 pb-6 pt-6 md:flex-row">
                        <div class="flex-1">
                            <div class="grid grid-cols-2 gap-3 sm:gap-4">
                                @foreach ([
                                    ['name' => 'Jordan P.', 'title' => 'Support Lead', 'img' => 'https://i.pravatar.cc/320?img=47'],
                                    ['name' => 'Serena L.', 'title' => 'Customer Success', 'img' => 'https://i.pravatar.cc/320?img=32'],
                                    ['name' => 'Daniel W.', 'title' => 'Escalations', 'img' => 'https://i.pravatar.cc/320?img=12'],
                                    ['name' => 'Priya S.', 'title' => 'Product Specialist', 'img' => 'https://i.pravatar.cc/320?img=5'],
                                ] as $participant)
                                    <div class="group relative overflow-hidden rounded-2xl bg-zinc-900/5">
                                        <img src="{{ $participant['img'] }}" alt="{{ $participant['name'] }}" class="h-full w-full object-cover">
                                        <div class="absolute inset-x-3 bottom-3 rounded-xl bg-white/95 px-3 py-2 text-left shadow-sm backdrop-blur transition group-hover:bg-white">
                                            <p class="text-sm font-semibold text-zinc-900">{{ $participant['name'] }}</p>
                                            <p class="text-xs font-medium text-zinc-500">{{ $participant['title'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="md:w-52">
                            <div class="flex h-full flex-col gap-3 rounded-2xl bg-zinc-50 p-4 ring-1 ring-zinc-100">
                                @foreach ([
                                    ['name' => 'Jordan P.', 'title' => 'Support Lead', 'active' => true, 'img' => 'https://i.pravatar.cc/120?img=47'],
                                    ['name' => 'Serena L.', 'title' => 'Customer Success', 'active' => false, 'img' => 'https://i.pravatar.cc/120?img=32'],
                                    ['name' => 'Daniel W.', 'title' => 'Escalations', 'active' => false, 'img' => 'https://i.pravatar.cc/120?img=12'],
                                    ['name' => 'Priya S.', 'title' => 'Product Specialist', 'active' => false, 'img' => 'https://i.pravatar.cc/120?img=5'],
                                ] as $member)
                                    <div @class([
                                        'flex items-center gap-3 rounded-xl border px-3 py-2 shadow-sm transition',
                                        'border-emerald-200 bg-white ring-1 ring-emerald-100' => $member['active'],
                                        'border-transparent bg-white/60 hover:border-zinc-200 hover:bg-white' => ! $member['active'],
                                    ])>
                                        <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="size-10 rounded-full object-cover" />
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-zinc-900">{{ $member['name'] }}</p>
                                            <p class="text-xs font-medium text-zinc-500">{{ $member['title'] }}</p>
                                        </div>
                                        <span class="inline-flex size-2.5 rounded-full {{ $member['active'] ? 'bg-emerald-500' : 'bg-zinc-300' }}"></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="mx-6 mb-6 rounded-2xl bg-zinc-900 px-6 py-4 text-white md:mx-6">
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div class="flex flex-wrap items-center gap-3">
                                <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                    <x-phosphor-microphone class="h-5 w-5" />
                                </button>
                                <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                    <x-phosphor-video-camera class="h-5 w-5" />
                                </button>
                                <button type="button" class="inline-flex size-12 items-center justify-center rounded-full bg-rose-500 text-white shadow-lg shadow-rose-500/30 transition hover:bg-rose-400">
                                    <x-phosphor-phone-disconnect class="h-5 w-5" />
                                </button>
                                <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                    <x-phosphor-desktop class="h-5 w-5" />
                                </button>
                                <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" aria-hidden="true" class="h-5 w-5">
                                        <circle cx="128" cy="128" r="48" opacity="0.2" fill="currentColor" />
                                        <circle cx="128" cy="128" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                                        <circle cx="128" cy="128" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center gap-3 text-sm font-medium">
                                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1">
                                    <x-phosphor-timer class="h-4 w-4" />
                                    12:42 elapsed
                                </span>
                                <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/10">
                                    <x-phosphor-chat-circle-text class="h-5 w-5" />
                                </span>
                                <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/10">
                                    <x-phosphor-dots-three-outline-vertical class="h-5 w-5" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 space-y-8 lg:col-span-5">
                <div class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-emerald-600">
                    <x-phosphor-lightning class="h-4 w-4" />
                    Faster support scheduling
                </div>
                <div>
                    <h3 class="text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">
                        Faster support scheduling
                    </h3>
                    <p class="mt-5 text-base leading-7 text-zinc-500 sm:text-lg">
                        Let customers book support sessions at their convenience. Wave integrates with video and phone tools, ensuring quick resolutions for issues without unnecessary delays.
                    </p>
                </div>
                <dl class="grid gap-6 sm:grid-cols-2">
                    <div class="rounded-2xl border border-zinc-200/80 bg-white p-6 shadow-sm shadow-zinc-900/5">
                        <div class="flex size-12 items-center justify-center rounded-full bg-zinc-900/5 text-zinc-700">
                            <x-phosphor-users-three class="h-6 w-6" />
                        </div>
                        <dt class="mt-5 text-base font-semibold text-zinc-900">Shared team routing</dt>
                        <dd class="mt-2 text-sm leading-6 text-zinc-500">Distribute incoming requests to the right specialist with pooled availability and automatic round-robin scheduling.</dd>
                    </div>
                    <div class="rounded-2xl border border-zinc-200/80 bg-white p-6 shadow-sm shadow-zinc-900/5">
                        <div class="flex size-12 items-center justify-center rounded-full bg-zinc-900/5 text-zinc-700">
                            <x-phosphor-calendar-check class="h-6 w-6" />
                        </div>
                        <dt class="mt-5 text-base font-semibold text-zinc-900">Real-time availability</dt>
                        <dd class="mt-2 text-sm leading-6 text-zinc-500">Sync every calendar, shift, and time zone so customers always see the latest openings—no manual coordination required.</dd>
                    </div>
                    <div class="rounded-2xl border border-zinc-200/80 bg-white p-6 shadow-sm shadow-zinc-900/5 sm:col-span-2">
                        <div class="flex size-12 items-center justify-center rounded-full bg-zinc-900/5 text-zinc-700">
                            <x-phosphor-chart-line-up class="h-6 w-6" />
                        </div>
                        <dt class="mt-5 text-base font-semibold text-zinc-900">Resolution analytics</dt>
                        <dd class="mt-2 text-sm leading-6 text-zinc-500">Track response times, CSAT, and agent performance with dashboards that keep every support leader in sync.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>
<section>
    <x-marketing.elements.heading
        level="h2"
        title="Master the Seas of <br> Product Development"
        description="Harness the power of Wave's extensive features to fast-track your SaaS projects. Get ready to fall in love with the future of SaaS development, today." 
    />
    <div class="text-center">
        <div class="grid grid-cols-2 gap-x-6 gap-y-12 mt-12 text-center lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-users-three class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">User Management</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Effortlessly manage users with Wave's intuitive dashboard.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-shield-check class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Secure Authentication</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Implement secure login, registration, and two-factor authentication.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-puzzle-piece class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Third-Party Integrations</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Easily integrate with popular third-party services.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-chart-bar class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Analytics</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Gain insights into user behavior with built-in analytics.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-paint-bucket class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Customizable Themes</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Personalize your app with easy-to-use themes.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-gear-fine class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Easy Setup</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Get started quickly with Wave's straightforward setup process.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-lifebuoy class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Community Support</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Join a vibrant community of developers for support and collaboration.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-images-square class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">File Management</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Manage your files efficiently with Wave's built-in file manager.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>