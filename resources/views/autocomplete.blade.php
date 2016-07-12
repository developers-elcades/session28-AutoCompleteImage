

@extends('layouts.master')

@section('title','Panel de Control')

@section('content')


<br><br><br><br><br><br><br><br>
<div class="wrapper">
<section class="container">
    <div class="col-sm-12">
    <div class="search-wrapper" style="padding-top: 19px;margin-right: 6px;margin-top: 16px;">
        <div class="container container--add"> 
            {{ Form::open(['url'=>'#','id'=>'search-form','method' => 'get','class'=>'search']) }}
                {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'escriba el texto','class'=>'search__field','style'=>'width: 83%;height: 33px;padding-left: 10px;border-color: orange;border-style: solid;border-width: 1px;'])}}
                {{ Form::submit('Buscar', array('class' => 'btn btn-md btn--danger search__button','style'=>'right: 38px;background: orange;color: #fff;')) }}
            {{ Form::close() }}
        </div>
    </div>

 <div class="clearfix"></div>
         
 </section>
</div>

{!!Html::script('//code.jquery.com/ui/1.11.4/jquery-ui.js')!!}

<script>
    
        $(function()
        {
                 $( "#q" ).autocomplete({
                  source: "search/autocomplete",
                  minLength: 3,
                  select: function(event, ui) {
                          $('#q').val(ui.item.value);
                  }
                });

                $('#q').data( "ui-autocomplete" )._renderItem = function( ul, item )
                {
                    var $li = $("<li style='width:800px;margin-left:10px;margin-bottom:5px'>"),
                        $img = $("<img style='width:8%'>");

                    $img.attr({
                      src: '{{ URL::to('/') }}/images/' + item.avatar,
                      alt: item.value
                });
                $li.attr('data-value', item.value);
                $li.append("");
                $li.append($img).append(""+item.value);    
                return $li.appendTo(ul);
                
              };

        });

</script>






@endsection

