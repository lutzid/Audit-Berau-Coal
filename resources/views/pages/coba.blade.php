@foreach($course->activeLessons as $lesson)
    <article class="lesson" >
        {!! $loop->iteration!!}.  <a href="{{route('learn.show', $lesson->id)}}"></a>
        <div class="body" id="title"> {!! $lesson->title!!}</div>
        <p> {!! $lesson->short_description !!}</p>
        <div class ="interaction">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCourse" data-myvalue="{{$lesson->title}}" data-myvar="{{$lesson->id}}">
                Start lesson
            </button>


        </div>
    </article>
@endforeach

<div class="modal fade" id="myCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <span id="modal-myvalue"></span>
                <span id="modal-myvar"></span>
                <span id="modal-bb"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
var ATTRIBUTES = ['myvalue', 'myvar', 'bb'];

$('[data-toggle="modal"]').on('click', function (e) {
    
    var $target = $(e.target);
    
    var modalSelector = $target.data('target');
    
    ATTRIBUTES.forEach(function (attributeName) {
        
        var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
        var dataValue = $target.data(attributeName);
        $modalAttribute.text(dataValue || '');
    });
});
</script>