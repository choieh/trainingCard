    <div class="filter">
        <div class="duration">
            <div class="inputGroup">
                <label for="input--period">기간</label>
                <div id="input--period">
                    <span class="input-box"><input type="text" id="input--period-01" class="input"
                            placeholder="YYYY.MM.DD"></span>
                    <span class="dash">~</span>
                    <span class="input-box"><input type="text" id="input--period-02" class="input"
                            placeholder="YYYY.MM.DD"></span>
                </div>
            </div>
            <div class="btn-group">
                <ul class="btn-list">
                    <!-- [D] btn-list__item : 클릭 시 is-active 클래스 추가 -->
                    <li class="btn-list__item">
                        <button class="btn">오늘</button>
                    </li>
                    <li class="btn-list__item">
                        <button class="btn">1주</button>
                    </li>
                    <li class="btn-list__item">
                        <button class="btn">1개월</button>
                    </li>
                    <li class="btn-list__item">
                        <button class="btn">3개월</button>
                    </li>
                    <li class="btn-list__item">
                        <button class="btn">6개월</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn bd-radius--circle size--s cover__bg--red">검색</button>
            <button type="button" class="btn bd-radius--circle size--s cover__line">초기화</button>
        </div>
    </div>