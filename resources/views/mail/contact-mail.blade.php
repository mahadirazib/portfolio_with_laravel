

@component('mail::message')

  # Viwer email:
  <span class="text-cyan-700 text-sm font-semibold">{{ $mail_from }}</span>

  <br>
  <br>

  # Viwer Message:
  {{ $content }}

  
@endcomponent



