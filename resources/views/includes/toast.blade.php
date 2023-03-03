@if (session('message'))
  <div class="alert alert-{{ session('type') }} d-flex justify-content-between align-items-center alert-toast"
    role="alert">
    <p class="mb-0">{{ session('message') }}</p>
    <button type="button" class="btn-close ms-3 btn-alert"></button>
  </div>
@endif
