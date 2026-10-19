@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Edit Profile</h1>
            <p class="text-muted mb-0">Perbarui teks halaman profil perusahaan.</p>
        </div>
        <a href="{{ route('admin.profile.index') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-brand d-flex gap-2 align-items-start mb-4">
            <i class="bi bi-exclamation-circle-fill mt-1"></i>
            <div>
                @foreach ($errors->all() as $error)
                    <div class="fw-semibold small">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Hero --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Hero</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="hero_label" class="form-label">Label</label>
                        <input type="text" name="hero_label" id="hero_label" value="{{ old('hero_label', $profile->hero_label) }}" class="form-control @error('hero_label') is-invalid @enderror">
                        @error('hero_label')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="hero_title" class="form-label">Judul</label>
                        <input type="text" name="hero_title" id="hero_title" value="{{ old('hero_title', $profile->hero_title) }}" class="form-control @error('hero_title') is-invalid @enderror" required>
                        @error('hero_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label for="hero_subtitle" class="form-label">Subjudul</label>
                        <input type="text" name="hero_subtitle" id="hero_subtitle" value="{{ old('hero_subtitle', $profile->hero_subtitle) }}" class="form-control @error('hero_subtitle') is-invalid @enderror">
                        @error('hero_subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Intro --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Tentang Kami</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="intro_eyebrow" class="form-label">Eyebrow</label>
                        <input type="text" name="intro_eyebrow" id="intro_eyebrow" value="{{ old('intro_eyebrow', $profile->intro_eyebrow) }}" class="form-control @error('intro_eyebrow') is-invalid @enderror">
                        @error('intro_eyebrow')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="intro_title" class="form-label">Judul</label>
                        <input type="text" name="intro_title" id="intro_title" value="{{ old('intro_title', $profile->intro_title) }}" class="form-control @error('intro_title') is-invalid @enderror" required>
                        @error('intro_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label for="intro_text_1" class="form-label">Paragraf 1</label>
                        <textarea name="intro_text_1" id="intro_text_1" rows="4" class="form-control @error('intro_text_1') is-invalid @enderror">{{ old('intro_text_1', $profile->intro_text_1) }}</textarea>
                        @error('intro_text_1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label for="intro_text_2" class="form-label">Paragraf 2</label>
                        <textarea name="intro_text_2" id="intro_text_2" rows="4" class="form-control @error('intro_text_2') is-invalid @enderror">{{ old('intro_text_2', $profile->intro_text_2) }}</textarea>
                        @error('intro_text_2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Facts --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Fakta / Statistik</h2>
                <div class="row g-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-6 col-md-3">
                            <label for="fact_{{ $i }}_value" class="form-label">Nilai {{ $i }}</label>
                            <input type="text" name="fact_{{ $i }}_value" id="fact_{{ $i }}_value" value="{{ old('fact_' . $i . '_value', $profile->{'fact_' . $i . '_value'}) }}" class="form-control @error('fact_' . $i . '_value') is-invalid @enderror">
                            @error('fact_' . $i . '_value')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            <label for="fact_{{ $i }}_label" class="form-label mt-3">Keterangan {{ $i }}</label>
                            <input type="text" name="fact_{{ $i }}_label" id="fact_{{ $i }}_label" value="{{ old('fact_' . $i . '_label', $profile->{'fact_' . $i . '_label'}) }}" class="form-control @error('fact_' . $i . '_label') is-invalid @enderror">
                            @error('fact_' . $i . '_label')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- Visi & Misi --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Visi &amp; Misi</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="vision_text" class="form-label">Visi</label>
                        <textarea name="vision_text" id="vision_text" rows="4" class="form-control @error('vision_text') is-invalid @enderror">{{ old('vision_text', $profile->vision_text) }}</textarea>
                        @error('vision_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="mission_text" class="form-label">Misi</label>
                        <textarea name="mission_text" id="mission_text" rows="4" class="form-control @error('mission_text') is-invalid @enderror">{{ old('mission_text', $profile->mission_text) }}</textarea>
                        <div class="form-text">Tulis satu poin misi per baris.</div>
                        @error('mission_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Values --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Nilai yang Kami Pegang</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="values_eyebrow" class="form-label">Eyebrow</label>
                        <input type="text" name="values_eyebrow" id="values_eyebrow" value="{{ old('values_eyebrow', $profile->values_eyebrow) }}" class="form-control @error('values_eyebrow') is-invalid @enderror">
                        @error('values_eyebrow')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="values_title" class="form-label">Judul</label>
                        <input type="text" name="values_title" id="values_title" value="{{ old('values_title', $profile->values_title) }}" class="form-control @error('values_title') is-invalid @enderror">
                        @error('values_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label for="values_subtitle" class="form-label">Subjudul</label>
                        <input type="text" name="values_subtitle" id="values_subtitle" value="{{ old('values_subtitle', $profile->values_subtitle) }}" class="form-control @error('values_subtitle') is-invalid @enderror">
                        @error('values_subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-md-6">
                            <label for="value_{{ $i }}_title" class="form-label">Nilai {{ $i }} - Judul</label>
                            <input type="text" name="value_{{ $i }}_title" id="value_{{ $i }}_title" value="{{ old('value_' . $i . '_title', $profile->{'value_' . $i . '_title'}) }}" class="form-control @error('value_' . $i . '_title') is-invalid @enderror">
                            @error('value_' . $i . '_title')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            <label for="value_{{ $i }}_desc" class="form-label mt-3">Nilai {{ $i }} - Deskripsi</label>
                            <textarea name="value_{{ $i }}_desc" id="value_{{ $i }}_desc" rows="2" class="form-control @error('value_' . $i . '_desc') is-invalid @enderror">{{ old('value_' . $i . '_desc', $profile->{'value_' . $i . '_desc'}) }}</textarea>
                            @error('value_' . $i . '_desc')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="card card-modern mb-4">
            <div class="card-body p-4 p-lg-5">
                <h2 class="h6 fw-bold text-primary text-uppercase mb-4">Ajakan (CTA)</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="cta_title" class="form-label">Judul</label>
                        <input type="text" name="cta_title" id="cta_title" value="{{ old('cta_title', $profile->cta_title) }}" class="form-control @error('cta_title') is-invalid @enderror">
                        @error('cta_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="cta_button_label" class="form-label">Teks Tombol</label>
                        <input type="text" name="cta_button_label" id="cta_button_label" value="{{ old('cta_button_label', $profile->cta_button_label) }}" class="form-control @error('cta_button_label') is-invalid @enderror">
                        @error('cta_button_label')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label for="cta_subtitle" class="form-label">Subjudul</label>
                        <input type="text" name="cta_subtitle" id="cta_subtitle" value="{{ old('cta_subtitle', $profile->cta_subtitle) }}" class="form-control @error('cta_subtitle') is-invalid @enderror">
                        @error('cta_subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-brand px-4">
                <i class="bi bi-check-lg me-1"></i>Update
            </button>
            <a href="{{ route('admin.profile.index') }}" class="btn btn-light px-4">Batal</a>
        </div>
    </form>
@endsection
