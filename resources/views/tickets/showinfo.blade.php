@extends('layouts.main')

@section('header-title', $ticket->id)

@section('main')
<div class="flex flex-col space-y-6">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-900 shadow sm:rounded-lg">
        <div class="max-full">
            <section>

                {{-- <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        Ticket "{{ $ticket->id }}"
                    </h2>
                </header> --}}
                <div class="mt-6 space-y-4">
                    @include('tickets.shared.fields', ['mode' => 'show'])
                </div>

            </section>
        </div>
    </div>
</div>
@endsection
