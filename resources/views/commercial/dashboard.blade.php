@extends('layouts.main')
@section('content')
    <div class="container">
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace de travail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (auth()->check() && auth()->user()->id)
                        <h5>Espace de travail {{auth()->user()->name}}</h5>
                    @else
                    @endif
                </div>
            </div>

            <main class="container">
                <div class="row mb-3">
                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                À faire
                                <hr class="bg-info">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>20 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#52cbf0"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                    <span class="d-block">juniorpecpec@gmail.com</span>
                                    <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#52cbf0"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                    <span class="d-block">juniorpecpec@gmail.com</span>
                                    <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#52cbf0"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                    <span class="d-block">juniorpecpec@gmail.com</span>
                                    <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>

                            <small class="d-block text-end mt-3">
                                <a href="{{ route('commercial.todo') }}">Propects à faire</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                Gagné
                                <hr class="bg-success">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>15 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="{{ route('commercial.do') }}">Propects gagné</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                À rappeler
                                <hr class="bg-warning">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>10 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#F9C132"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#F9C132"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#F9C132"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="{{ route('commercial.tocall') }}">Propects à rappeler</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                Perdu
                                <hr class="bg-danger">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>5 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#DC4245"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#DC4245"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#DC4245"></rect></svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Junior PECPEC</strong>
                                    </div>
                                    <div>
                                        <span class="d-block">juniorpecpec@gmail.com</span>
                                        <span class="d-block">0102030405</span>
                                    </div>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="{{ route('commercial.lost') }}">Propects perdus</a>
                            </small>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>

@endsection