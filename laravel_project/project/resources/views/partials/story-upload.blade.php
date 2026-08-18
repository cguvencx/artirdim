{{-- Hikaye yükleme modalı (yalnızca satıcılar) --}}
@once
<div class="story-upload-overlay" id="storyUploadModal" data-testid="story-upload-modal">
    <div class="story-upload-box">
        <div class="su-head">
            <span>Hikaye Paylaş</span>
            <button type="button" onclick="closeStoryUpload()" data-testid="story-upload-close"><i class="bi bi-x-lg"></i></button>
        </div>
        <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data" id="storyUploadForm">
            @csrf
            <label class="su-drop" id="suDrop">
                <input type="file" name="media" id="storyFileInput" accept="image/*,video/*" hidden data-testid="story-file-input">
                <div id="suPlaceholder" class="su-ph">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <span>Görsel veya video seç</span>
                    <small>JPG, PNG, MP4 · max 20MB</small>
                </div>
                <div id="suPreview" class="su-preview"></div>
            </label>
            <input type="text" name="caption" maxlength="150" class="su-caption" placeholder="Açıklama (isteğe bağlı)">
            <button type="submit" class="su-submit" id="suSubmit" disabled data-testid="story-upload-submit">
                <i class="bi bi-send me-1"></i> Paylaş
            </button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('assets/css/story-upload.css') }}">

<script src="{{ asset('assets/js/custom/story-upload.js') }}"></script>
@endonce
