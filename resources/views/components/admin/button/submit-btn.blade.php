   @props(['text' => 'Submit Now'])
   <button type="submit" {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
       <i class="fa fa-paper-plane m-r-5"></i> {{ __($text) }}
   </button>

