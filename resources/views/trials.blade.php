
                        <h1>{{$Heading}}</h1>
                        @if(count($Trials) == 0)

                        <p>No trials available</p> 
                        @endif
                        @foreach($Trials as $Trial)

                            
                            <a href="/trial/{{$Trial['id']}}"> <h3>{{$Trial['title']}}</h3>  </a>
                            <p>{{$Trial['label']}}</p>
                            <p>{{$Trial['company']}}</p>
                            <p>{{$Trial['email']}}</p>
                            <p>{{$Trial['location']}}</p>
                            <p><a href="{{$Trial['website']}}">{{$Trial['website']}}</a></p>
                            <p>{{$Trial['description']}}</p>

                        @endforeach