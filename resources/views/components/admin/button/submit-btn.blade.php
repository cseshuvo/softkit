   @props(['text' => 'Submit Now'])
   <button type="submit" {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
       <i class="fa fa-paper-plane m-r-5"></i> {{ __($text) }}
   </button>

   @push('script')
       <script>
           $('form').on('submit', function(e) {
               const $btn = $(this).find('button[type="submit"]');
               $btn.prop('disabled', true);
               $btn.html(
                   '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><i class="fa fa-spinner m-r-5"></i> @lang('Loading')'
               );
           });
       </script>
   @endpush
