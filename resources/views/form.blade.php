@extends('layout.app')

	<div class="space"></div>

	<div class="daily-verse" id="ourmanna-verse">Loading...</div>
	<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

@section('content')

	<form method="post" action="/bible-study-request-forms">
		@csrf
		<div class="flex-container">
			<div>
				<p class="form-desc">Personal Information</p>

				<label for="cname">
					Complete Name
				</label>
				<input type="text" name="cname" id="cname" value="{{ $requests->cname }}"><br>

				<label for="email">
					Email Address
				</label>
				<input type="email" name="email" id="email" value="{{ $requests->email }}"><br>

				<label for="contact">
					Contact Number
				</label>
				<input type="number" name="contact" id="contact" value="{{ $requests->contact }}"><br>

				<label for="bdate">
					Birthday
				</label>
				<input type="date" name="bdate" id="bdate" value="{{ $requests->bdate }}"><br>

				<label for="religion">
					Religious Affiliation
				</label>
				<input type="text" name="religion" id="religion" value="{{ $requests->religion }}"><br>
			</div>

			<div>
				<p class="form-desc">Request Details</p>

				<label for="bsdate">
					Bible Study Date
				</label>
				<input type="date" name="bsdate" id="bsdate" value="{{ $requests->bsdate }}"><br>

				<label for="bstime">
					Bible Study Time
				</label>
				<input type="time" name="bstime" id="bstime" value="{{ $requests->bstime }}"><br>

				<label for="location">
					Bible Study Location
				</label>
				<input type="text" name="location" id="location" value="{{ $requests->location }}"><br>
			</div>
		</div>

		<button type="submit">Submit</button>
	</form>
@endsection