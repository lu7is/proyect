



    
        
     

    <div >
        <div >
            <div >
            
                <form action="{{url('/bodegas')}}" method="post" >
                @csrf

                @include('Bodegas.Form',['modo'=>'Registrar']);
   
                </form>
            </div>
        </div>
    </div>
