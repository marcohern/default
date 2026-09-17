<!-- subtitle -->
<div class="h-subtitles">
  <div class="h-subtitle typing-subtitle">
    @foreach ($jobTitles as $jobTitle)
      <p>{{ $jobTitle->title }}</p>
    @endforeach
  </div>
  <span class="typed-subtitle"></span>
</div>