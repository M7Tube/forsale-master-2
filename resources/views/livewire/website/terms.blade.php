<div class="container my-5">
    <h4 class="mb-2"><b>{{ __('Terms and Conditions') }}</b></h4>
    @if (app()->getLocale() == 'en')
        <p>{{ $term['en_terms_conditions'] ?? __('Empty') }}</p>
    @else
        <p>{{ $term['ar_terms_conditions'] ?? __('Empty') }}</p>
    @endif
</div>
