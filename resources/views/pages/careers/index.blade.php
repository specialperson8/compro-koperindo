<x-app-layout>
    <div class="container my-5 py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Bergabung dengan Tim Kami</h1>
            <p class="lead text-muted">Temukan kesempatan untuk bertumbuh dan berinovasi bersama Koperindo.</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="accordionCareers">
                    @forelse ($careers as $index => $career)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-{{ $career->id }}">
                                {{-- Selalu tambahkan class 'collapsed' pada button --}}
                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $career->id }}"
                                        aria-expanded="false" {{-- Selalu set ke 'false' --}}
                                        aria-controls="collapse-{{ $career->id }}">
                                    <span class="career-tittle fw-bold me-2">{{ $career->title }}</span> - <span class="career-location ms-2">{{ $career->location }}</span>
                                </button>
                            </h2>
                            {{-- Hapus class 'show' dari div konten --}}
                            <div id="collapse-{{ $career->id }}"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading-{{ $career->id }}"
                                data-bs-parent="#accordionCareers">
                                <div class="accordion-body">
                                    {!! $career->description !!}
                                    <hr class="my-4">
                                    <p class="mb-1 fw-bold">Kirimkan lamaran Anda ke:</p>
                                    <a href="mailto:{{ $career->apply_email }}" class="btn btn-warning">{{ $career->apply_email }}</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <p class="text-muted fs-5">Saat ini belum ada lowongan yang tersedia. Silakan cek kembali di lain waktu.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
