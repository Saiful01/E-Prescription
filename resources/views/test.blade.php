<div ng-init="name = 'Value[block]'" id="hotel_div" style="display: none">

    <hr>
    <h3 for="hotelDetailsLevel" class="text-danger"><b>Hotel Details</b></h3>
    <hr>
    <div ng-repeat="fieldGroup in fieldGroups" class="well">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="membership">Date</label>
                <input ng-model="fieldGroup.date" name="date[]" type="date" class="form-control"
                       placeholder="12/02/2020">
            </div>
            <div class="form-group col-md-4">
                <label for="membership">Hotel</label>
                <input ng-model="fieldGroup.hotelAirline" name="hotelAirline[]" type="text"
                       class="form-control" placeholder="Holiday Inn Maadi">
            </div>
            <div class="form-group col-md-4">
                <label for="destination">Destination</label>
                <input ng-model="fieldGroup.destinationTwo" name="destinationTwo[]" type="text"
                       class="form-control" placeholder="Cairo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="membership">Includes</label>
                <select id="includes" ng-model="fieldGroup.includes" name="includes[]"
                        class="form-control">
                    <option>Room Only</option>
                    <option>Breakfast</option>
                    <option>Half Board</option>
                    <option>Full Board</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="destination">Room Type</label>
                <input ng-model="fieldGroup.roomView" name="roomView[]" type="text"
                       class="form-control" placeholder="Nile View">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nightCount">Night(s)</label>
                <select id="nightCount" ng-model="fieldGroup.nightCount" name="nightCount[]"
                        class="form-control" ng-change="hotelNightChange(fieldGroup.nightCount)">
                    <option selected>Choose...</option>
                    <option value="1">1 Night</option>
                    <option value="2">2 Night</option>
                    <option value="3">3 Night</option>
                    <option value="4">4 Night</option>
                    <option value="5">5 Night</option>
                    <option value="6">6 Night</option>
                    <option value="7">7 Night</option>
                    <option value="8">8 Night</option>
                    <option value="9">9 Night</option>
                    <option value="10">10 Night</option>
                    <option value="11">11 Night</option>
                    <option value="12">12 Night</option>
                    <option value="13">13 Night</option>
                    <option value="14">14 Night</option>
                    <option value="15">15 Night</option>
                    <option value="16">16 Night</option>
                    <option value="17">17 Night</option>
                    <option value="18">18 Night</option>
                    <option value="19">19 Night</option>
                    <option value="20">20 Night</option>
                    {{--@foreach($hotelNights as $res)
                        <option value="{{$res->hotel_night_id}}">{{strtoupper($res->hotel_night)}}</option>
                    @endforeach--}}
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="destination">Price/Night</label>
                <input ng-model="fieldGroup.pricePerNight" name="pricePerNight[]" type="text"
                       class="form-control" ng-change="hotelPriceChange(fieldGroup.pricePerNight)">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="roomType">#Room</label>
                <select id="roomType" ng-model="fieldGroup.roomType" name="roomType"
                        class="form-control" ng-change="hotelRoomTypeChange(fieldGroup.roomType)">
                    <option selected>Choose...</option>
                    <option value="1">Single</option>
                    <option value="2">Double</option>
                    <option value="3">Triple</option>
                    <option value="4">Quadruple</option>
                    {{--@foreach($hotelRooms as $res)
                        <option value="{{$res->hotel_room_id}}">{{strtoupper($res->hotel_room)}}</option>
                    @endforeach--}}
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="destination">Total</label>
                <input ng-model="totalAmount" name="totalAmount[]"
                       ng-change="updateTotal(totalAmount)" type="text"
                       class="form-control" readonly="readonly">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <button ng-click="delete(fieldGroup)" class="btn btn-danger btn-sm" type="button">
                    Remove
                </button>
            </div>
            <div class="form-group col-md-6">
                <button ng-click="clone()" class="btn btn-primary float-right" type="button">+Add
                </button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var sasApp = angular.module('sasApp', []);
    sasApp.controller('MultipleFieldCtrl', function ($scope) {

        $scope.fieldGroups = [
            {
                'date': '',
                'hotelAirline': '',
                'destinationTwo': '',
                'includes': '',
                'roomView': '',
                'nightCount': '',
                'pricePerNight': '',
                'roomType': '',
                'totalAmount': $scope.nightCount * $scope.pricePerNight,
            }
        ];
        $scope.clone = function () {
            $scope.fieldGroups.push({});
        }
        $scope.delete = function (fieldGroup) {
            var index = $scope.fieldGroups.indexOf(fieldGroup);
            $scope.fieldGroups.splice(index, 1);
        }

        $scope.fieldGroups = [
            {
                'dateOfAirTicket': '',
                'airLine': '',
                'formAirLine': '',
                'toAirLine': '',
                'airLineClass': '',
                'airLineType': '',
                'airLineStop': '',
                'airLineViaStop': '',
                'airLineViaStop2': '',
                'airLineDeparture': '',
                'airLineArrival': '',
                'airLineTransit': '',
            }
        ];
        $scope.clone = function () {
            $scope.fieldGroups.push({});
        }
        $scope.delete = function (fieldGroup) {
            var index = $scope.fieldGroups.indexOf(fieldGroup);
            $scope.fieldGroups.splice(index, 1);
        }


        $scope.fieldGroups = [
            {
                'totalPerson': '',
                'extra': '',
                'charge': '',
                'info': '',
            }
        ];
        $scope.clone = function () {
            $scope.fieldGroups.push({});
        }
        $scope.delete = function (fieldGroup) {
            var index = $scope.fieldGroups.indexOf(fieldGroup);
            $scope.fieldGroups.splice(index, 1);
        }


        $scope.isHotelChange = function () {


            if ($scope.isHotelChecked) {


                document.getElementById('hotel_div').style.display = 'block';

            } else {
                console.log('No');

                document.getElementById('hotel_div').style.display = 'none';
            }


        }

        $scope.isAirlineChange = function () {


            if ($scope.isAirlineChecked) {


                document.getElementById('airline_div').style.display = 'block';

            } else {
                console.log('No');

                document.getElementById('airline_div').style.display = 'none';
            }


        }

        $scope.isOthersChange = function () {


            if ($scope.isOthersChecked) {


                document.getElementById('others_div').style.display = 'block';

            } else {
                console.log('No');

                document.getElementById('others_div').style.display = 'none';
            }


        }

        $scope.typeChange = function (itemSelected) {

            console.log('hhhhhh' + itemSelected);
            if (itemSelected == 1) {
                document.getElementById('1stop').style.display = 'none';
                document.getElementById('2stop').style.display = 'none';
                document.getElementById('3stop').style.display = 'none';
                document.getElementById('direct').style.display = 'block';
            }
            if (itemSelected == 2) {
                document.getElementById('1stop').style.display = 'block';
                document.getElementById('2stop').style.display = 'none';
                document.getElementById('3stop').style.display = 'none';
                document.getElementById('direct').style.display = 'none';
            }
            if (itemSelected == 3) {
                document.getElementById('1stop').style.display = 'none';
                document.getElementById('2stop').style.display = 'block';
                document.getElementById('3stop').style.display = 'none';
                document.getElementById('direct').style.display = 'none';
            }
            if (itemSelected == 4) {
                document.getElementById('1stop').style.display = 'none';
                document.getElementById('2stop').style.display = 'none';
                document.getElementById('3stop').style.display = 'block';
                document.getElementById('direct').style.display = 'none';
            }
        }

        $scope.hotelNightChange = function (nightCount) {

            console.log('Hotel' + nightCount);
            $scope.totalAmount = nightCount * $scope.fieldGroups[0].roomType * $scope.fieldGroups[0].pricePerNight;

        }

        $scope.hotelRoomTypeChange = function (roomType) {

            console.log('RoomCount' + roomType);
            $scope.totalAmount = roomType * $scope.fieldGroups[0].nightCount * $scope.fieldGroups[0].pricePerNight;

        }

        $scope.hotelPriceChange = function (price) {

            console.log('Hotel price' + price);
            console.log('Hotel Night' + $scope.fieldGroups[0].nightCount);
            console.log('Room Type' + $scope.fieldGroups[0].roomType);


            $scope.totalAmount = price * $scope.fieldGroups[0].nightCount * $scope.fieldGroups[0].roomType;

        }

    });

</script>
@endsection