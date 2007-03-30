<?php
    /**
     * @class  comment
     * @author zero (zero@nzeo.com)
     * @brief  comment 모듈의 high class
     **/

    class comment extends ModuleObject {

        /**
         * @brief 설치시 추가 작업이 필요할시 구현
         **/
        function moduleInstall() {
            // action forward에 등록 (관리자 모드에서 사용하기 위함)
            $oModuleController = &getController('module');
            $oModuleController->insertActionFoward('comment', 'view', 'dispCommentAdminList');
            $oModuleController->insertActionFoward('comment', 'controller', 'procCommentAdminDeleteChecked');

            return new Object();
        }

        /**
         * @brief 설치가 이상이 없는지 체크하는 method
         **/
        function moduleIsInstalled() {
            return new Object();
        }

        /**
         * @brief 업데이트 실행
         **/
        function moduleUpdate() {
            return new Object();
        }

    }
?>
