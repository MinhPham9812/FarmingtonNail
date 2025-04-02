<footer class="pt-[30px]" style="background-color: #0e0d13">
    <div class="container">
        {{-- Information --}}
        <div class="grid lg:grid-cols-3 justify-center mb-[40px]">
            <div class="px-[12px]">
                <div class="text-[45px] text-white font-cookie font-medium mb-[8px] leading-[54px]">Farmington Nail Spa</div>
                <div class="mb-[16px] text-white font-mons inline-block">Follow us to get more updates</div>
                <div class="flex items-center gap-[10px]">
                    <div class="my-[7px]">
                        <a href="https://www.facebook.com/farmingtonnailspa/" target="_blank">
                            <img src="{{ asset('images/icon-facebook.png') }}" alt="Facebook Alt" class="w-[40px] h-[40px] rounded-full">
                        </a>
                    </div>
                    <div class="my-[7px]">
                        <a href="https://www.google.com/search?kgmid=/g/1tdnlr6d&hl=en-VN&q=Mc+Nails+%26+Tanning&shndl=30&source=sh/x/loc/osrp/m5/1&kgs=2ea8326c597d124a" target="_blank">
                            <img src="{{ asset('images/icon-google.png') }}" alt="Google Alt" class="w-[40px] rounded-full h-[40px]">
                        </a>
                    </div>
                    <div class="my-[7px]">
                        <a href="https://www.instagram.com/farmingtonnailspa/#" target="_blank">
                            <img src="{{ asset('images/icon-insta.png') }}" alt="Insta Alt" class="w-[40px] h-[40px] rounded-full">
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-[12px]">
                <div class="text-[45px] text-white font-cookie font-medium mb-[8px] leading-[54px]">Contact us</div>
                <div>
                    {{-- Address --}}
                    <div class="flex gap-[15px] mb-[15px]">
                        <div class="w-[30px] h-[30px] bg-secondary flex items-center justify-center">
                            <i class="fa-solid fa-house text-white"></i>
                        </div>
                        <div itemprop="address">
                            <h3 class="text-[15px] font-mons text-white underline font-extrabold">Address:</h3>
                            <div class="text-[15px] font-mons text-white">
                                <p>24061 Orchard Lake Rd,</p>
                                <p>Famington, MI 48336</p> 
                            </div>
                        </div>
                    </div>
                    {{-- Phone --}}
                    <div class="flex gap-[15px] mb-[15px]">
                        <div class="w-[30px] h-[30px] bg-secondary flex items-center justify-center">
                            <i class="fa-solid fa-phone text-white"></i>                        
                        </div>
                        <div itemprop="phone">
                            <h3 class="text-[15px] font-mons text-white underline font-extrabold">Phone:</h3>
                            <div class="text-[15px] font-mons text-white">
                                <p>248-478-0790</p>
                            </div>
                        </div>
                    </div>
                    {{-- Email --}}
                    <div class="flex gap-[15px] mb-[15px]">
                        <div class="w-[30px] h-[30px] bg-secondary flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-white"></i>
                        </div>
                        <div itemprop="email">
                            <h3 class="text-[15px] font-mons text-white underline font-extrabold">Email:</h3>
                            <div class="text-[15px] font-mons text-white">
                                <p>farmingtonspa@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-[12px]">
                <div class="text-[45px] text-white font-cookie font-medium mb-[8px] leading-[54px]">Open hours</div>
                <div class="inline-table w-full">
                    <div class="table-row">
                        <span class="table-cell pb-[15px] font-bold font-mons text-[15px] text-white">Mon - Sat:</span>
                        <span class="table-cell font-mons text-[15px] text-white">9:30 am - 7:30 pm</span>
                    </div>
                    <div class="table-row">
                        <span class="table-cell pb-[15px] font-bold font-mons text-[15px] text-white">Sunday:</span>
                        <span class="table-cell font-mons text-[15px] text-white">11:00 am - 5:00 pm</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- Map --}}
        <div class="pb-[30px]">
            <div class="text-[45px] text-white font-cookie font-medium mb-[8px] leading-[54px]">Location</div>
            <div class="border-[5px] border-secondary google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.3692647191!2d-83.37266536253689!3d42.47206783552791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824b1227378ac0f%3A0xda9bbc997530084d!2sFarmington%20Nail%20Spa!5e1!3m2!1svi!2sus!4v1743610769362!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{--  --}}
        <div class="text-center py-[15px] border-t border-[#787878]">
            <div class="text-[15px] font-mons text-[#787878]">
                <p>© Copyright by Farmington Nail Spa. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>