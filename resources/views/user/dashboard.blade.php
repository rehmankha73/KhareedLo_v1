<x-auth-user-layout>

    <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
        <!--Title-->
        <div class="font-sans">
            <span class="text-base text-purple-500 font-bold">&laquo;</span> <a href="#" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back Link</a>
            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Help page title</h1>
            <hr class="border-b border-gray-400">
        </div>
        <!--Post Content-->
        <!--Lead Para-->
        <p class="py-6">
            👋 Welcome fellow <a class="text-purple-500 no-underline hover:underline" href="https://www.tailwindcss.com">Tailwind CSS</a> fan.  This starter template provides a starting point to create your own helpdesk / faq / knowledgebase articles using Tailwind CSS and vanilla Javascript.
        </p>
        <p class="py-6">The basic help article layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>
        <h1 class="py-2 font-sans">Heading 1</h1>
        <h2 class="py-2 font-sans">Heading 2</h2>
        <h3 class="py-2 font-sans">Heading 3</h3>
        <h4 class="py-2 font-sans">Heading 4</h4>
        <h5 class="py-2 font-sans">Heading 5</h5>
        <h6 class="py-2 font-sans">Heading 6</h6>
        <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>
        <ol>
            <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
            <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
            <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
        </ol>
        <blockquote class="border-l-4 border-purple-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>
        <p class="py-6">Example code block:</p>
        <pre class="bg-gray-900 rounded text-white font-mono text-base p-2 md:p-4">
				<code class="break-words whitespace-pre-wrap">
&lt;header class="site-header outer"&gt;
&lt;div class="inner"&gt;
&lt;/div&gt;
&lt;/header&gt;
				</code>
			</pre>
        <!--/ Post Content-->
        <!-- Useful -->
        <hr class="border-b border-gray-400 py-4">
        <div class="flex items-center">
            <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-green-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/>
            </svg>
            <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-red-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/>
            </svg>
            <div class="pl-4">
                <p class="text-gray-800 font-bold">Did you find this article useful?</p>
                <p class="text-xs text-gray-600 pt-2">0 out of 0 found this useful</p>
            </div>
        </div>
        <!-- /Useful -->
    </div>

</x-auth-user-layout>
