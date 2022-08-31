<?php

class ModelHome {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function DeleteMetode()
    {
        $SQL = "DROP TABLE IF EXISTS cdpm_taker_wa_blast";
        $this->db->query($SQL);
        $this->db->execute();
    }
    public function CreateTableCdpmTakerWaBlast($lastdate)
    {
        $bulan = date('m', strtotime($lastdate));
        $tahun = date('Y', strtotime($lastdate));
        $date_first = $tahun . '-' . $bulan . '-01';
        $sql1 = "CREATE TABLE cdpm_taker_wa_blast as 
                (
                    select b.program, a.area, a.region,
                    b.Total, b.Delivered, b.Not_Delivered, b.Not_WA_User, b.Taker_Control, b.Revenue_Control, b.Taker, b.Revenue, b.SEND_PERSEN,
                    b.Taker_Control_PERSEN, b.TAKER_PERSEN
                    from (select area, region from tof_territory group by 1,2 order by region desc) a
                    left join
                    (SELECT
                    a.program as program,
                    a.region as region,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Terkirim', 'Tidak Terkirim') ,a.subs, 0 )),0) AS Total,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') ,a.subs, 0 )),0) as Delivered,
                    FORMAT(SUM(IF(a.cat_sent NOT IN ('Terkirim') ,a.subs, 0 )),0) as Not_Delivered,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa') ,a.subs, 0 )),0) as Not_WA_User,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)),0) as Taker_Control,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'), a.revenue,0)),0) as Revenue_Control,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'), a.subs,0)),0) as Taker,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'), a.revenue,0)),0) as Revenue,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Terkirim') ,a.subs, 0 )) / SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Terkirim', 'Tidak Terkirim') ,a.subs, 0 )))
                    * 100,2),2) as SEND_PERSEN,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)) / SUM(IF(a.cat_sent IN
                    ('Bukan Nomor Wa','Tidak Terkirim') ,a.subs, 0 ))) * 100,2),2) as Taker_Control_PERSEN,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)) / SUM(IF(a.cat_sent IN
                    ('Terkirim') ,a.subs, 0 ))) * 100,2),2) as TAKER_PERSEN
                    FROM tof_res_wablast_comsak a
                    WHERE a.date between '" . $date_first . "' and '" . $lastdate . "'
                    GROUP BY a.program, a.region
                    order by a.region desc) b
                    on a.region = b.region
                    union all
                    select b.program, a.area, 'TOTAL' as region,
                    b.Total, b.Delivered, b.Not_Delivered, b.Not_WA_User, b.Taker_Control, b.Revenue_Control, b.Taker, b.Revenue, b.SEND_PERSEN,
                    b.Taker_Control_PERSEN, b.TAKER_PERSEN
                    from (select area from tof_territory group by 1) a
                    left join
                    (SELECT
                    a.program as program,
                    'AREA 1' as area,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Terkirim', 'Tidak Terkirim') ,a.subs, 0 )),0) AS Total,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') ,a.subs, 0 )),0) as Delivered,
                    FORMAT(SUM(IF(a.cat_sent NOT IN ('Terkirim') ,a.subs, 0 )),0) as Not_Delivered,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa') ,a.subs, 0 )),0) as Not_WA_User,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)),0) as Taker_Control,
                    FORMAT(SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'), a.revenue,0)),0) as Revenue_Control,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'), a.subs,0)),0) as Taker,
                    FORMAT(SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'), a.revenue,0)),0) as Revenue,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Terkirim') ,a.subs, 0 )) / SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Terkirim', 'Tidak Terkirim') ,a.subs, 0 )))
                    * 100,2),2) as SEND_PERSEN,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Bukan Nomor Wa','Tidak Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)) / SUM(IF(a.cat_sent IN
                    ('Bukan Nomor Wa','Tidak Terkirim') ,a.subs, 0 ))) * 100,2),2) as Taker_Control_PERSEN,
                    FORMAT(ROUND((SUM(IF(a.cat_sent IN ('Terkirim') AND a.cat_taker IN ('taker'),a.subs, 0)) / SUM(IF(a.cat_sent IN
                    ('Terkirim') ,a.subs, 0 ))) * 100,2),2) as TAKER_PERSEN
                    FROM tof_res_wablast_comsak a
                    WHERE a.date between '" . $date_first . "' and '" . $lastdate . "'
                    GROUP BY program, area) b
                    on a.area = b.area
                    ORDER BY program,region ASC
                )";
            $this->db->query($sql1);
            $this->db->execute();
    }

    public function getDataTakerWA()
    {
        $SQL = "SELECT * FROM cdpm_taker_wa_blast";
        $this->db->query($SQL);
        $result = $this->db->resultSet();
        return $result;
    }


}