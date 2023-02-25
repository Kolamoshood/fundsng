
                        <h1>{{$Heading}}</h1>
                        @foreach($Trials as $Trial)

                            
                            <a href="/trial/{{$Trial['id']}}"> <h3>{{$Trial['name']}}</h3>  </a>
                            <p>{{$Trial['description']}}</p>

                        @endforeach
