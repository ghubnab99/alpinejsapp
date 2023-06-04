@extends('layouts.app')

@section('content')

    <div x-data="someFunction()" class="mb-20">

        <div class="max-w-4xl mx-auto mt-5 text-center font-bold">
            <i>If no data is present kindly run the seeder to populate sample data (php artisan db:seed)</i> 
        </div>
        <div x-show="showLoading"  class="max-w-4xl mx-auto mt-5 text-center font-bold">
            
            <br><br>
            Loading in 10 seconds...
        </div>

        {!! Comn::showModalData('showStudents', 'Students', $students) !!}
        {!! Comn::showModalData('showTeachers', 'Teachers', $teachers) !!}
        {!! Comn::showModalData('showCourses', 'Courses', $courses) !!}
        {!! Comn::showModalData('showDepartments', 'Departments', $departments) !!}
        {!! Comn::showModalData('showZones', 'Zones', $zones) !!}

    </div>

    <script>
    function someFunction() {

        return {
            showLoading: true,
            showStudents: false,
            showTeachers: false,
            showCourses: false,
            showDepartments: false,
            showZones: false,
                        
            init() {
              var mainInterval = setInterval(() => {
                
                if(!this.showStudents)
                {
                    this.showLoading = false;
                    this.showStudents = true;
                }
                else if(!this.showTeachers)
                {
                    this.showTeachers = true;
                }
                else if(!this.showCourses)
                {
                    this.showCourses = true;                    
                }
                else if(!this.showDepartments)
                {
                    this.showDepartments = true;                    
                }
                else if(!this.showZones)
                {
                    this.showZones = true;
                }
                else
                {
                    clearInterval(mainInterval);
                }

                window.scrollTo(0, document.body.scrollHeight);                
                //alert('working');
              }, 10000); // 10 seconds
            },
        }
    } 

</script>
    
@endsection



