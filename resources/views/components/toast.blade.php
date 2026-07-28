@php
$type = session()->has('success') ? 'success' 
: (session()-> has('error') ? 'error' 
: ' warning');

$message = session($type);
@endphp
@if(session()->has('success') || session()->has('error') 
    || session()->has('warning'))

<div id='toast' class="absolute top-22 right-10 flex">
            <div class="">
                <p>
                    {{ $message}}
                </p>
            </div>
</div>

<script> 
    seTimeout(()=>{
        const toast = document.getElementById('toast');
        console.log(toast);
        if(toast){
            toast.remove();
        }
    } 3000);
</script>

@endif