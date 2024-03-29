<!-- component -->
<!-- Component Start -->
<div class="flex justify-center w-screen h-screen px-4 text-gray-700">
	<div class="flex w-full max-w-screen-lg">
		<div class="flex flex-col w-64 py-4 pr-3 mr-5">
            @include('layouts.sidebar')
		</div>

		<div class="flex flex-col flex-grow border rounded border-l border-r mt-5 border-gray-300">
			<div class="flex justify-between flex-shrink-0 px-8 py-4 border-b border-gray-300">
				<h1 class="text-xl font-semibold">Feed Title</h1>
				<button class="flex items-center h-8 px-2 text-sm bg-gray-300 rounded-sm hover:bg-gray-400">New post</button>
			</div>
			<div class="flex-grow h-0 overflow-auto">
				<div class="flex w-full p-8 border-b-4 border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<textarea class="p-3 bg-transparent border border-gray-500 rounded-sm" name="" id=""  rows="3" placeholder="What's happening?"></textarea>
						<div class="flex justify-between mt-2">
							<button class="flex items-center h-8 px-3 text-xs rounded-sm hover:bg-gray-200">Attach</button>
							<button class="flex items-center h-8 px-3 text-xs rounded-sm bg-gray-300 hover:bg-gray-400">Post</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
                        <div class="flex items-center justify-center h-64 mt-2 bg-gray-200">
							<span class="font-semibold text-gray-500">Image</span>
						</div>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
                        <div class="flex items-center justify-center h-64 mt-2 bg-gray-200">
							<span class="font-semibold text-gray-500">Image</span>
						</div>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
						<div class="flex items-center justify-center h-64 mt-2 bg-gray-200">
							<span class="font-semibold text-gray-500">Image</span>
						</div>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
						<div class="flex items-center justify-center h-64 mt-2 bg-gray-200">
							<span class="font-semibold text-gray-500">Image</span>
						</div>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
				<div class="flex w-full p-8 border-b border-gray-300">
					<span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
							<span class="ml-auto text-sm">Just now</span>
						</div>
						<p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
						<div class="flex items-center justify-center h-64 mt-2 bg-gray-200">
							<span class="font-semibold text-gray-500">Image</span>
						</div>
						<div class="flex mt-2">
							<button class="text-sm font-semibold">Like</button>
							<button class="ml-2 text-sm font-semibold">Reply</button>
							<button class="ml-2 text-sm font-semibold">Share</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-1/4 py-4 pl-4">
			<input class="flex items-center h-8 px-2 border border-gray-500 rounded-sm" type="search" Placeholder="Search…">
			<div>
				<h3 class="mt-6 font-semibold">Trending</h3>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Component End  -->

