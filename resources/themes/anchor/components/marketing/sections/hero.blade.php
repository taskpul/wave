@php
    $participants = [
        ['initials' => 'JP', 'name' => 'Jordan P.', 'role' => 'Support Lead'],
        ['initials' => 'SL', 'name' => 'Serena L.', 'role' => 'Customer Success'],
        ['initials' => 'DW', 'name' => 'Daniel W.', 'role' => 'Escalations'],
        ['initials' => 'PS', 'name' => 'Priya S.', 'role' => 'Product Specialist'],
    ];
@endphp

<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-indigo-100/60 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-72 w-72 translate-x-1/3 translate-y-1/3 rounded-full bg-sky-100/70 blur-3xl"></div>
    </div>

    <div class="relative mx-auto flex w-full max-w-7xl flex-col gap-16 px-6 py-24 sm:px-10 lg:flex-row lg:items-start lg:px-16">
        <div class="flex w-full max-w-xl flex-col gap-6 text-left lg:pt-6">
            <span class="inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-indigo-50 px-4 py-1.5 text-sm font-medium text-indigo-600">
                <span class="h-2 w-2 rounded-full bg-indigo-500"></span>
                For support teams
            </span>
            <h1 class="text-4xl font-bold tracking-tight text-zinc-900 sm:text-5xl lg:text-6xl">
                How Wave works for customer support teams
            </h1>
            <p class="text-lg leading-relaxed text-zinc-600">
                Empower your support team with scheduling tools that enhance customer service, streamline issue resolution, and improve satisfaction.
            </p>
            <div>
                <x-button size="lg" class="px-6 py-3 text-base">
                    Get started
                </x-button>
            </div>
        </div>

        <div class="w-full max-w-3xl lg:ml-auto lg:w-auto">
            <div class="rounded-3xl border border-zinc-200 bg-white/90 p-6 shadow-xl shadow-zinc-900/5 backdrop-blur">
                <div class="flex flex-col gap-6">
                    <div class="flex items-center justify-between gap-6">
                        <div class="flex -space-x-3">
                            @foreach ($participants as $person)
                                <div class="flex h-12 w-12 items-center justify-center rounded-full border-2 border-white bg-gradient-to-br from-indigo-500 to-violet-500 text-sm font-semibold text-white shadow-sm">
                                    {{ $person['initials'] }}
                                </div>
                            @endforeach
                        </div>
                        <span class="text-sm font-semibold text-zinc-900">Cal.com team huddle meeting</span>
                    </div>

                    <div class="flex items-center gap-2 text-sm font-semibold text-emerald-600">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                        </span>
                        Live · Support specialists
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ($participants as $person)
                            <div class="flex items-center gap-3 rounded-2xl border border-zinc-200/70 bg-white px-4 py-3 shadow-sm shadow-zinc-900/5">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-zinc-100 text-sm font-semibold text-zinc-700">
                                    {{ $person['initials'] }}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-zinc-900">{{ $person['name'] }}</p>
                                    <p class="text-xs font-medium text-zinc-500">{{ $person['role'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between border-t border-dashed border-zinc-200 pt-6 text-sm text-zinc-500">
                        <div class="flex items-baseline gap-2 text-zinc-900">
                            <span class="text-2xl font-semibold">12:42</span>
                            <span class="text-sm font-medium text-zinc-500">elapsed</span>
                        </div>
                        <div class="flex -space-x-2 text-xs font-medium text-zinc-500">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-100">JP</span>
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-100">SL</span>
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-100">DW</span>
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-zinc-100">PS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative mx-auto flex w-full max-w-7xl flex-col gap-10 px-6 pb-24 sm:px-10 lg:grid lg:grid-cols-12 lg:px-16 lg:pb-32">
        <div class="lg:col-span-5">
            <span class="text-sm font-semibold uppercase tracking-widest text-indigo-500">Faster support scheduling</span>
            <h2 class="mt-3 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">Faster support scheduling</h2>
            <p class="mt-4 text-base leading-relaxed text-zinc-600">
                Let customers book support sessions at their convenience. Wave integrates with video and phone tools, ensuring quick resolutions for issues without unnecessary delays.
            </p>
        </div>
        <div class="lg:col-span-7 lg:pl-12">
            <div class="grid gap-6 sm:grid-cols-2">
                <div class="rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm shadow-zinc-900/5">
                    <h3 class="text-lg font-semibold text-zinc-900">Shared team routing</h3>
                    <p class="mt-3 text-sm leading-relaxed text-zinc-600">
                        Distribute incoming requests to the right specialist with pooled availability and automatic round-robin scheduling.
                    </p>
                </div>
                <div class="rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm shadow-zinc-900/5">
                    <h3 class="text-lg font-semibold text-zinc-900">Real-time availability</h3>
                    <p class="mt-3 text-sm leading-relaxed text-zinc-600">
                        Sync every calendar, shift, and time zone so customers always see the latest openings—no manual coordination required.
                    </p>
                </div>
                <div class="rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm shadow-zinc-900/5 sm:col-span-2">
                    <h3 class="text-lg font-semibold text-zinc-900">Resolution analytics</h3>
                    <p class="mt-3 text-sm leading-relaxed text-zinc-600">
                        Track response times, CSAT, and agent performance with dashboards that keep every support leader in sync.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
