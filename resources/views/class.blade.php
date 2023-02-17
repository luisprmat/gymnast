<x-app-layout>
    <!-- Page Header Start -->
    <x-slot name="title">
        {{ __('Gym Classes') }}
    </x-slot>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5" style="margin-top: 90px;">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="flaticon-six-pack"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">{{ __('Body Building') }}</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href="" class="btn btn-lg btn-outline-light mt-4 px-4">{{ __('Join Now') }}</a>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">{{ __('Muscle Building') }}</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href="" class="btn btn-lg btn-outline-light mt-4 px-4">{{ __('Join Now') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">{{ __('Class Timetable') }}</h4>
            <h4 class="display-4 font-weight-bold">{{ __('Working Hours and Class Time') }}</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">{{ __('All Classes') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">{{ __('Cardio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">{{ __('Crossfit') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">{{ __('Powerlifting') }}</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>{{ __('Time') }}</th>
                                    <th>{{ __('Monday') }}</th>
                                    <th>{{ __('Tuesday') }}</th>
                                    <th>{{ __('Wednesday') }}</th>
                                    <th>{{ __('Thursday') }}</th>
                                    <th>{{ __('Friday') }}</th>
                                    <th>{{ __('Saturday') }}</th>
                                    <th>{{ __('Sunday') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>{{ __('Time') }}</th>
                                    <th>{{ __('Monday') }}</th>
                                    <th>{{ __('Tuesday') }}</th>
                                    <th>{{ __('Wednesday') }}</th>
                                    <th>{{ __('Thursday') }}</th>
                                    <th>{{ __('Friday') }}</th>
                                    <th>{{ __('Saturday') }}</th>
                                    <th>{{ __('Sunday') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>{{ __('Time') }}</th>
                                    <th>{{ __('Monday') }}</th>
                                    <th>{{ __('Tuesday') }}</th>
                                    <th>{{ __('Wednesday') }}</th>
                                    <th>{{ __('Thursday') }}</th>
                                    <th>{{ __('Friday') }}</th>
                                    <th>{{ __('Saturday') }}</th>
                                    <th>{{ __('Sunday') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>{{ __('Time') }}</th>
                                    <th>{{ __('Monday') }}</th>
                                    <th>{{ __('Tuesday') }}</th>
                                    <th>{{ __('Wednesday') }}</th>
                                    <th>{{ __('Thursday') }}</th>
                                    <th>{{ __('Friday') }}</th>
                                    <th>{{ __('Saturday') }}</th>
                                    <th>{{ __('Sunday') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Cardio') }}</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>{{ __('Crossfit') }}</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">{{ __('Power Lifting') }}</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class="container-fluid position-relative bmi mt-5" style="margin-bottom: 90px;">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">{{ __('Body Mass Index') }}</h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">{{ __('What is BMI?') }}</h4>
                        <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita
                            lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat
                            diam</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white">{{ __('Calculate your BMI') }}</h1>
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white"
                                        placeholder="{{ __('Weight') }} (KG)">
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white"
                                        placeholder="{{ __('Height') }} (CM)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white"
                                        placeholder="{{ __('Age') }}">
                                </div>
                                <div class="col form-group">
                                    <select class="custom-select custom-select-lg bg-dark text-muted">
                                        <option>{{ __('Gender') }}</option>
                                        <option>{{ __('Male') }}</option>
                                        <option>{{ __('Female') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="button" class="btn btn-lg btn-block btn-dark border-light"
                                        value="{{ __('Calculate Now') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->
</x-app-layout>
